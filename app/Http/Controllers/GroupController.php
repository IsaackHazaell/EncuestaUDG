<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use App\Employee;
use App\Department;
use App\TeacherDepartment;
use App\GroupTeacher;
use App\Teacher;
use App\GroupSubject;
use App\HeadDepartment;
use App\Subject;
use App\TeacherSubject;
use Illuminate\Support\Facades\Storage;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupsubjects = GroupSubject::all();
        $teachersubjects = TeacherSubject::all();
        //dd($teachersubjects[0]->teacher->employee->user);
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
        return view('group.create')->with('groups',$groups)->with('groupsubjects',$groupsubjects)
        ->with('teachersubjects',$teachersubjects);
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group_teacher = GroupTeacher::create([
                'groupsubject_id' => $request->groupsubject_id,
                'teachersubject_id' => $request->teachersubject_id,
        ]);
        $msg = [
            'title' => 'Guardado!',
            'text' => 'Grupo dado de alta exitosamente.',
            'icon' => 'success'
        ];
        return redirect()->route('group.create')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
