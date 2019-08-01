<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Users;
use App\Employee;
use DB;
use Yajra\DataTables\DataTables;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['teachers']=Teacher::paginate(5);

        return view('teacher.index',$datos);
    }

    public function showTableT()
    {
        $users = DB::table('teachers')
          ->select('teachers.*','employees.*','users.*')
          ->join('employees', 'employees.id', '=', 'teachers.employee_id')
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->get();

          return Datatables::of($users)
          ->addColumn('btn', 'teacher.actions')
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
        $users = Users::select('id','name')->where('type',2)->get();
        return view('teacher.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      {
          $datosteacher=request()->all();

          $datosteacher=request()->except('_token');

          $employee=Employee::create($datosteacher);
          //$employee = Employee::create($request->all());
          $user = New Teacher;
          $user->employee_id = $employee->id;
          $user->save();

          $msg = [
            'title' => 'Creado!',
            'text' => 'Usuario creado exitosamente.',
            'icon' => 'success'
            ];

          return redirect('teacher')->with('message', $msg);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
