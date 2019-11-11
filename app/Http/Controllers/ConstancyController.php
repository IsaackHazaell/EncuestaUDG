<?php

namespace App\Http\Controllers;

use App\Constancy;
use Illuminate\Http\Request;
use DB;
use App\HeadDepartment;
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
        return view('constancy.index');
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

    public function showTableC()
    {
        /*         $constancy = DB::table('constancies')
                ->selectRaw('constancies.*, constancies.id as constanciesid, sum(result) as prom')
                ->groupBy('constancies.teacher_id')
                ->get(); */

        /*         $constancy = Constancy::groupBy('teacher_id')
                ->get();

            
                return Datatables::of($constancy)
                ->make(true); */

        $employee_id = \Auth::user()->employee->id;

        //dd($employee_id);

        $head_deparment = HeadDepartment::where('employee_id', $employee_id)->first();
      //  dd($head_deparment);
        $query = DB::table('subjects')
        ->select('group_teachers.*', 'group_teachers.id as group_teachers_id',
        'subjects.*' , 'subjects.id as subjects_id',
        'group_subjects.*', 'group_subjects.id as group_subjects_id',
        'teacher_subjects.*', 'teacher_subjects.id as teacher_subjects_id',
        'teachers.*', 'teachers.id as teachers_id',
        'employees.*', 'employees.id as employee_id',
        'users.*', 'users.id as user_id',
        'groups.*', 'groups.id as group_id'
        )
        ->where('subjects.department_id', $head_deparment->department_id)
        ->join('group_subjects', 'group_subjects.subject_id', 'subjects.id')   
        ->join('group_teachers', 'group_teachers.groupsubject_id', 'group_subjects.id')
        ->join('teacher_subjects', 'teacher_subjects.id', 'group_teachers.teachersubject_id')
        ->join('teachers', 'teachers.id', 'teacher_subjects.teacher_id')
        ->join('employees', 'employees.id', 'teachers.employee_id')
        ->join('users', 'users.id', 'employees.user_id')
        ->join('groups', 'groups.id', 'group_subjects.group_id')
        ->get();


    
/* 
        $query = DB::table('group_teachers')
        ->select('groups.*', 'groups.id as group_id', 'users.*', 'users.id as user_id', 'employees.*', 'employees.id as employee_id',
        'teacher_subject.*', 'teacher_subjects.id as teacher_subject_id', 'subjects.*', 'subjects.id as subject_id', 
        'group_subjects.*', 'group_subjects.id as group_subjects_id','group_subjects.*', 'group_teachers.id as group_teachers_id' )
        ->join('') */
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Constancy  $constancy
     * @return \Illuminate\Http\Response
     */
    public function show(Constancy $constancy)
    {
        //
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
