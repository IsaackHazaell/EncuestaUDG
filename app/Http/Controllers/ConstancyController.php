<?php

namespace App\Http\Controllers;

use App\Constancy;
use Illuminate\Http\Request;
use DB;
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
use Barryvdh\DomPDF\Facade as PDF;
use Yajra\DataTables\DataTables;
class ConstancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->employee->contract != 'admin')
        {
            return view('constancy.index');
        }
        else
        {
            return view('constancy.index_admin');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function download($id, $teacher, $group ,$subject)
    {
       // dd($id, $teacher, $group ,$subject);
        $constancies = Constancy::where('teacher_id', $teacher)
        ->where('subject_id', $subject)
        ->where('group_id', $group)
        ->selectRaw('avg(result) as sum')
        ->pluck('sum');
        $employees = Teacher::where('id', $teacher)->first();
        $compare = Employee::where('id', $employees->employee_id)->first();
        $compare_teacher = User::where('id', $compare->user_id)->first();
        $subjects = Subject::where('id', $subject)->first()->name;// materia
        $prof = $compare_teacher->name;// profesor
        $prom = $constancies[0]; // resultado
        $groups = Group::findOrFail($group);
        
        if($groups->turn == 0)
        {
            $groups->turn = "Matutino";
        }
        else
        {
            $groups->turn = "Vespertino";
        }

        $pdf = PDF::loadView('pdf.constancy', compact('groups', 'prom', 'prof', 'subjects'));
        return $pdf->download('constancia.pdf');
    }

    public function showTableC()
    {
        if(\Auth::user()->employee->contract != 'admin')
        {
            $employee_id = \Auth::user()->employee->id;
            $head_deparment = HeadDepartment::where('employee_id', $employee_id)->first();

            if($head_deparment != null)
            {
                $query = DB::table('subjects')
                ->select('group_teachers.*', 'group_teachers.id as group_teachers_id',
                'subjects.*' , 'subjects.id as subjects_id', 'subjects.name as subjects_name',
                'group_subjects.*', 'group_subjects.id as group_subjects_id',
                'teacher_subjects.*', 'teacher_subjects.id as teacher_subjects_id',
                'teachers.*', 'teachers.id as teachers_id',
                'employees.*', 'employees.id as employee_id',
                'users.*', 'users.id as user_id','users.name as user_name',
                'groups.*', 'groups.id as group_id',
                'departments.*', 'departments.id as department_id', 'departments.name as department_name'
                )
                ->where('subjects.department_id', $head_deparment->department_id)
                ->join('group_subjects', 'group_subjects.subject_id', 'subjects.id')   
                ->join('group_teachers', 'group_teachers.groupsubject_id', 'group_subjects.id')
                ->join('teacher_subjects', 'teacher_subjects.id', 'group_teachers.teachersubject_id')
                ->join('teachers', 'teachers.id', 'teacher_subjects.teacher_id')
                ->join('employees', 'employees.id', 'teachers.employee_id')
                ->join('users', 'users.id', 'employees.user_id')
                ->join('groups', 'groups.id', 'group_subjects.group_id')
                ->join('departments', 'departments.id', 'subjects.department_id')
                ->get();

            //   dd($query);
                for ($i=0; $i < count($query); $i++) { 
                    if($query[$i]->turn == 0)
                    {
                        $query[$i]->turn = "Matutino";
                    }
                    else
                    {
                        $query[$i]->turn = "Vespertino";
                    }
                }
            
                return Datatables::of($query)
                    ->addColumn('btn', 'constancy.partials.buttons')
                    ->rawColumns(['btn'])
                    ->make(true);
            }

            else
            {
                $query = [];
                return Datatables::of($query)
                ->addColumn('btn', 'constancy.partials.buttons')
                ->rawColumns(['btn'])
                ->make(true);
            }
        }
        else
        {
            $query = DB::table('subjects')
            ->select('group_teachers.*', 'group_teachers.id as group_teachers_id',
            'subjects.*' , 'subjects.id as subjects_id', 'subjects.name as subjects_name',
            'group_subjects.*', 'group_subjects.id as group_subjects_id',
            'teacher_subjects.*', 'teacher_subjects.id as teacher_subjects_id',
            'teachers.*', 'teachers.id as teachers_id',
            'employees.*', 'employees.id as employee_id',
            'users.*', 'users.id as user_id','users.name as user_name',
            'groups.*', 'groups.id as group_id',
            'departments.*', 'departments.id as department_id', 'departments.name as department_name'
            )
            ->join('group_subjects', 'group_subjects.subject_id', 'subjects.id')   
            ->join('group_teachers', 'group_teachers.groupsubject_id', 'group_subjects.id')
            ->join('teacher_subjects', 'teacher_subjects.id', 'group_teachers.teachersubject_id')
            ->join('teachers', 'teachers.id', 'teacher_subjects.teacher_id')
            ->join('employees', 'employees.id', 'teachers.employee_id')
            ->join('users', 'users.id', 'employees.user_id')
            ->join('groups', 'groups.id', 'group_subjects.group_id')
            ->join('departments', 'departments.id', 'subjects.department_id')
            ->get();

        //   dd($query);
            for ($i=0; $i < count($query); $i++) { 
                if($query[$i]->turn == 0)
                {
                    $query[$i]->turn = "Matutino";
                }
                else
                {
                    $query[$i]->turn = "Vespertino";
                }
            }
        
            return Datatables::of($query)
                ->addColumn('btn', 'constancy.partials.buttons')
                ->rawColumns(['btn'])
                ->make(true);
        }

        
        
    }


    public function request($group_teacher_id)
    {
        $row = GroupTeacher::find($group_teacher_id);
        $row->request = 1; //Solicitado
        $row->save();
        $msg = [
            'title' => 'Enviado!',
            'text' => 'Tu solicitud ha sido enviada.',
            'icon' => 'success'
        ];
        return redirect()->back()->with('message', $msg);
    }

    public function accept($id, $result)
    {
        $row = GroupTeacher::find($id);
        if($result == 0)
        {
            $row->request = 0;
            $row->save();
            $msg = [
                'title' => 'Rechazada!',
                'text' => 'La solicitud fué rechazada.',
                'icon' => 'danger'
            ];
        }   
        else
        {
            $row->request = 2;
            $row->save();
            $msg = [
                'title' => 'Aceptada!',
                'text' => 'La solicitud fué aceptada.',
                'icon' => 'success'
            ];
        }
        return redirect()->back()->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function show(Constancy $constancy)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Constancy $constancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constancy $constancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constancy $constancy)
    {
        //
    }
}
