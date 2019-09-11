<?php

namespace App\Http\Controllers;

use App\HeadDepartment;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use DB;
use Yajra\DataTables\DataTables;
use App\Department;
use App\Type;

class HeadDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Users::select('id','name')->where('user_type',2)->get();
        $users = DB::table('users')
          ->select('users.id','users.id as user_id','users.name','types.user_type')
          ->join('types', 'types.user_id', '=', 'users.id')
          ->where('types.user_type','1')
          ->get();
        return view('hdepartment.index')->with('users',$users);

    }

    public function showTableHD()
    {
        $users = DB::table('head_departments')
          ->select('head_departments.*','head_departments.id as head_departments_id','employees.*','employees.id as employee_id','users.*','users.id as user_id','types.user_type')
          ->join('employees', 'employees.id', '=', 'head_departments.employee_id')
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->join('types', 'types.user_id', '=', 'users.id')
          ->get();

          return Datatables::of($users)
          ->addColumn('btn', 'head_departments.actions')
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

    /**
     * Display the specified resource.
     *
     * @param  \App\HeadDepartment  $headDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(HeadDepartment $headDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HeadDepartment  $headDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(HeadDepartment $headDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HeadDepartment  $headDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeadDepartment $headDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HeadDepartment  $headDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeadDepartment $headDepartment)
    {
        //
    }
}
