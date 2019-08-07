<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Users;
use App\Employee;
use DB;
use Yajra\DataTables\DataTables;
use App\HeadDepartment;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Users::select('id','name')->where('user_type',1)->get();
        return view('department.index')->with('users',$users);

    }

    public function showTableD()
    {
        $users = DB::table('head_departments')
          ->select('departments.*','departments.id as department_id','departments.name as department_name','employees.*','employees.id as employee_id','users.*','users.id as user_id',
                   'users.name as user_name','head_departments.*','head_departments.id as head_department_id')
          ->join('departments', 'departments.id', '=', 'head_departments.department_id')
          ->join('employees', 'employees.id', '=', 'head_departments.employee_id')
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->get();

          return Datatables::of($users)
          ->addColumn('btn', 'department.actions')
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
      $users = Users::select('id','name')->where('user_type',1)->get();
      return view('department.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar empleado
        $employee=Employee::create([
                'code' => $request->code,
                'contract' => $request->contract,
                'appointment' => $request->appointment,
                'user_id' => $request->user_id,
            ]);
        //guardar dpto
        $department=Department::create([
                'name' => $request->department,
                ]);
        //guardar jefe dpto
        $user = New HeadDepartment;
        $user->employee_id = $employee->id;
        $user->department_id = $department->id;
        $user->save();


         $msg = [
          'title' => 'Creado!',
          'text' => 'Departamento creado creado exitosamente.',
          'icon' => 'success'
          ];

        return redirect('depertment')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      //dd($request);
      $department = Department::findOrFail($request->id);
      $department->name = $request->department_name;
      $department->save();
      $user = Users::where('id',$request->user_id);
      $headdepartment = HeadDepartment::findOrFail($department->department_id);
      $headdepartment->employee_id = $employee->id;
      $headdepartment->save();


      $msg = [
        'title' => 'Modificado!',
        'text' => 'Departamento modificado exitosamente.',
        'icon' => 'success'
        ];

        return redirect('department')->with('message', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
