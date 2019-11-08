<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Question;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\Department;
use App\TeacherDepartment;
use App\Teacher;
use App\HeadDepartment;
use App\Group;
use App\Subject;
use App\Type;
use App\GroupTeacher;
use App\GroupSubject;
use App\TeacherSubject;
use App\User;
use App\Constancy;
use Illuminate\Support\Facades\Storage;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('poll.index');
    }

    public function showTableP()
    {
        $polls = DB::table('polls')
        ->select('polls.*')
        ->get();
        foreach($polls as $poll)
        {
            if ($poll->type == 0)
            {
                $poll->type = "5 respuestas";
            }
            else
            {
                $poll->type = "2 respuestas";
            }
        }

        return Datatables::of($polls)
           ->addColumn('btn','poll.actions')
           ->rawColumns(['btn'])
        ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $polls = Poll::all();
        $groups = Group::all();
        foreach($groups as $group)
        {
            if ($group->turn == 0)
            {
                $group->turn = "M";
            }
            else
            {
                $group->turn = "V";
            }
        }
        return view('poll.create', compact('polls'), compact('groups'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poll = Poll::create([
            'name' => $request->name,
            'type' => $request->poll_type,
        ]);
        foreach($request->poll_group as $poll_group){
            $poll->groups()->attach($poll_group);
        }
        foreach($request->question as $question){
            $question = Question::create([
                'poll_id' => $poll->id,
                'question' => $question,
            ]);
        }

        $msg = [
            'title' => 'Encuesta creada correctamente',
            'text' => 'Continuar..',
            'icon' => 'success',
        ];
        return redirect()->route('poll.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
        $questions = $poll->questions;
        return view('poll.show', compact('poll', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function edit(Poll $poll)
    {
        dd($poll);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poll $poll)
    {
        
        $request->validate([
            'name' => 'required',
            'poll_type' => 'required',
            'questions.*' =>'required'
        ]);
        $poll->name = $request->name;
        $poll->type = $request->poll_type;
        $poll->save();
        
        $i = 0;
        foreach ($request->questions as $question) {
            $poll->questions[$i]->question = $question;
            $poll->questions[$i]->save();
            $i++;
        }
        $msg = [
            'title' => 'Encuesta actualizada correctamente',
            'text' => 'Continuar..',
            'icon' => 'success',
        ];
        return redirect()->route('poll.index')->with('message', $msg);

    }

    public function public(Poll $poll)
    {
        if($poll->public == 0)
        {
            $poll->public = 1;
            $msg = [
                'title' => 'Encuesta publicada correctamente',
                'text' => 'Continuar..',
                'icon' => 'success',
            ];
        }
        else
        {
            $poll->public = 0;
            $msg = [
                'title' => 'Encuesta despublicada correctamente',
                'text' => 'Continuar..',
                'icon' => 'success',
            ];
        }
        $poll->save();
        return redirect()->route('poll.index')->with('message', $msg);
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poll $poll)
    {
        $poll->delete();
        $msg = [
            'title' => 'Eliminado!',
            'text' => 'Encuesta eliminado exitosamente.',
            'icon' => 'success'
        ];

        return response()->json($msg);
    }

    public function getGroups()
    {
      //  $polls = Poll::where('public', 1)->with('questions', 'groups')->get();
        $groups = Group::all();
        foreach($groups as $group)
        {
            if ($group->turn == 0)
            {
                $group->turn = "M";
            }
            else
            {
                $group->turn = "V";
            }
        }
       // dd($polls);
        return view('client_poll.encuesta', compact('groups'));
    }

    public function showpolls(Request $request)
    {
        $group = Group::findOrFail($request->group);
        $polls = $group->polls->where('public', 1);
        $group_subjects = GroupSubject::where('group_id', $group->id)->get();
    //    dd($group_subjects);
        $group_teacher = [];
        $subjects = [];
        foreach ($group_subjects as $group_subject) 
        {
            $temp = GroupTeacher::where('groupsubject_id', $group_subject->id)->first();
            $subject = Subject::where('id', $group_subject->subject_id )->first();
            if($temp != null && $subject != null)
            {
                array_push($group_teacher,$temp);
                array_push($subjects,$subject);
            }
        }
        $teacher_subject = [];
        foreach ($group_teacher as $teacher) 
        {
            $teacher_row =  TeacherSubject::where('id', $teacher->teachersubject_id)->first();
            $employees = Teacher::where('id', $teacher_row->teacher_id)->first();
            $compare = Employee::where('id', $employees->employee_id)->first();
            $compare_teacher = User::where('id', $compare->user_id)->first();
            if($compare_teacher != null)
            {
                array_push($teacher_subject, $compare_teacher);
            }
        }
        
        return view('client_poll.poll_view', compact('polls', 'subjects', 'teacher_subject'));
    }


    public function evaluate(Request $request)
    {
     //   dd($request);
        $indice = 0;
        $indice2 = 0;
        
        for ($i=0; $i < count($request->teacher_id) ; $i++) 
        {   $result = 0;
            $poll = Poll::find($request->poll_id[$i]);
            $num = $poll->questions->count();
            if($poll->type == 1)//2 respuestas
            {
                $sum = 0;
                for ($j=0; $j < $num ; $j++) { 
                  $sum += $request->answer_2[$indice];
                  $indice++;
                }
                $result = $sum*100/$num;
            }
            else //5 respuestas
            {
                $sum = 0;
                for ($k=0; $k < $num ; $k++) { 
                    $sum +=  $request->answer_5[$indice2];
                    $indice2++;
                }
                $result = $sum*100/$num;
            }
            $constancy = Constancy::create([
                'teacher_id' => $request->teacher_id[$i],
                'subject_id' => $request->subject_id[$i],
                'result' => $result,
            ]);
        }

        return redirect()->route('home');
    }

}
