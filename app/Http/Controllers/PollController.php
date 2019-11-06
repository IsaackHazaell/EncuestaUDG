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
use App\TeacherSubject;
use App\Type;
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
        $poll = DB::table('polls')->where('id', $poll->id)->first();
        return view('poll.show', compact('polls'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poll $poll)
    {
        $poll=Poll::findOrFail($poll);
        $poll->delete();
        $msg = [
            'title' => 'Eliminado!',
            'text' => 'Encuesta eliminado exitosamente.',
            'icon' => 'success'
        ];

        return response()->json($msg);
    }
}
