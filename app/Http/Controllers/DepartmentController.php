<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Users;
use App\Employee;
use DB;
use Yajra\DataTables\DataTables;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $users = Users::select('id','name')->where('user_type',1)->get();
        return view('department.index');

    }

    public function showTableD()
    {
         $department = DB::table('departments')
           ->select('departments.id as department_id','departments.name as department_name')
           ->get();

           return Datatables::of($department)
           ->addColumn('btn','department.actions')
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
    //   $users = Users::select('id','name')->where('user_typegit st',1)->get();
      return view('department.create');//->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Department::create([
            'name' => $request->department_name,
        ]);

         $msg = [
          'title' => 'Creado!',
          'text' => 'Departamento creado creado exitosamente.',
          'icon' => 'success'
          ];

        return redirect('department')->with('message', $msg);
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


      $msg = [
        'title' =>'Modificado!',
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
    public function destroy($department)
    {
        $department=Department::findOrFail($department);
        $department->delete();
      
      
        $msg = [
          'title' => 'Eliminado!',
          'text' => 'Departamento eliminado exitosamente.',
          'icon' => 'success'
      ];
  
      return response()->json($msg);
      }
}
