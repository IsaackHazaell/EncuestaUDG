<?php

namespace App\Http\Controllers;

use App\HeadDepartment;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\Teacher;
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
/*         dd("hola"); */
        $users = DB::table('head_departments')
          ->select('head_departments.*','head_departments.id as head_departments_id','employees.*',
          'employees.id as employee_id','users.*','users.id as user_id','types.user_type',
          'departments.id as department_id','departments.name as department_name')
          ->join('employees', 'employees.id', '=', 'head_departments.employee_id')
          ->join('departments','departments.id','=','head_departments.department_id')
          ->join('users', 'users.id', '=', 'employees.user_id')
          ->join('types', 'types.user_id', '=', 'users.id')
          ->get();

          return Datatables::of($users)
          ->addColumn('btn', 'hdepartment.actions')
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
        $teachers = Teacher::all();
        //dd($teacher->employee->user);
        $departments = Department::all();
        return view('hdepartment.create')->with('departments',$departments)->with('teachers',$teachers);
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
            $employee=Employee::find($request->employee_id); 

            $head_department = HeadDepartment::where('employee_id',$employee->id)->first();
            if($head_department != null){
                $head_department->delete();
            };
            
            $head_department = HeadDepartment::where('department_id',$request->department_id)->first();
            if($head_department != null){
                $head_department->delete();
            };
    
            $headdepartment=HeadDepartment::create([
              'employee_id' => $employee->id,
              'department_id' => $request->department_id,
            ]);

          $msg = [
            'title' => 'Creado!',
            'text' => 'Jefe de departamento creado exitosamente.',
            'icon' => 'success'
            ];
  
          return redirect('hdepartment')->with('message', $msg);
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
    public function destroy(HeadDepartment $hdepartment)
    {
        // $hdepartment=HeadDepartment::findOrFail($headdepartment->id);
        
        $hdepartment->delete();
        $msg = [
            'title' => 'Eliminado!',
            'text' => 'Usuario eliminado exitosamente.',
            'icon' => 'success'
        ];
  
      return response()->json($msg);
      }
}
