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

        $users = Users::select('id','name')->where('user_type',2)->get();
        return view('teacher.index')->with('users',$users);

    }

    public function showTableT()
    {
        $users = DB::table('teachers')
          ->select('teachers.*','teachers.id as teacher_id','employees.*','employees.id as employee_id','users.*','users.id as user_id')
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
        $users = Users::select('id','name')->where('user_type',2)->get();
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
         
      $user= New Users;
      $user->name= $request->name;
      $user->password= $request->password;
      $user->email= $request->email;
      $user->user_type= 2;
      $user->save();


        $employee=Employee::create([
                'code' => $request->code,
                'contract' => $request->contract,
                'appointment' => $request->appointment,
                'user_id' => $user->id,
            ]);

           $teacher=Teacher::create([
                      'employee_id' => $employee->id,
            ]);

            ///

        $msg = [
          'title' => 'Creado!',
          'text' => 'Usuario creado exitosamente.',
          'icon' => 'success'
          ];

        return redirect('teacher')->with('message', $msg);
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
    public function update(Request $request)
    {
      //dd($request);
      $employee = Employee::findOrFail($request->id);
      $input = $request->all();
      $employee->fill($input)->save();

      $msg = [
        'title' => 'Modificado!',
        'text' => 'Profesor modificado exitosamente.',
        'icon' => 'success'
        ];

        return redirect('teacher')->with('message', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
      $employee=Employee::findOrFail($teacher->employee_id);
      $employee->delete();
      $msg = [
          'title' => 'Eliminado!',
          'text' => 'Profesor eliminado exitosamente.',
          'icon' => 'success'
        ];

      return response()->json($msg);
    }
}
