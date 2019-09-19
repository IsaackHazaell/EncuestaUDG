<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\Department;
use App\TeacherDepartment;
use App\Teacher;
use App\HeadDepartment;
use App\Subject;
use App\TeacherSubject;
use App\Type;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['users']=Users::paginate(5);

        return view('users.index',$datos);
    }

    public function showTableU()
    {
        $users = DB::table('users')
          ->select('users.*','users.id as user_id','employees.*','employees.id as employee_id')
          ->join('employees','employees.user_id','users.id')
          ->get();
          
          return Datatables::of($users)
          ->addColumn('btn', 'users.actions')
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
      $departments = Department::all();
      $subjects = Subject::all();
      return view('users.create', compact('departments'), compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'email' => 'unique:users',
          'name' => 'required',
      ]);
       $user= New Users;
       $user->name= $request->name;
       $user->password= $request->password;
       $user->password = Hash::make($request->password);
       $user->email= $request->email;
       $user->save();     

        $employee=Employee::create([
                'code' => $request->code,
                'contract' => $request->contract,
                'appointment' => $request->appointment,
                'user_id' => $user->id,
            ]);
        
            if ($request->director==1){
              $type=Type::create([
                'user_id' => $user->id,
                'user_type' => 0,
               ]);
            }
        
            if ($request->bossdepartment==1){
              $type=Type::create([
                'user_id' => $user->id,
                'user_type' => 1,
              ]);
              $headdepartment=HeadDepartment::create([
                'employee_id' => $employee->id,
                'department_id' => $request->jefe_departamento,
              ]);
            }
            
     
            if ($request->teacher==1)
            {
              
              $type=Type::create([
                'user_id' => $user->id,
                'user_type' => 2,
              ]);

              $teacher=Teacher::create([
                'employee_id' => $employee->id,
              ]);

              if($request->teachersubject != null)
                foreach ($request->teachersubject as $teachersubject) {
                  $teachersubject_new=TeacherSubject::create([
                    'subject_id' => $teachersubject,
                    'teacher_id' => $teacher->id,
                  ]);
                }
              
            }
           

          

        $msg = [
          'title' => 'Creado!',
          'text' => 'Usuario creado exitosamente.',
          'icon' => 'success'
          ];

        return redirect('users')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $user)
    {
      
      $employee = DB::table('employees')->where('user_id', $user->id)->first();
      $types = Type::where('user_id',$user->id)->get();
      $flag_hd=false;
      $flag_t=false;
      foreach ($types as $type) {
        if($type->user_type == 1)
          $flag_hd=true;
        else if($type->user_type == 2)
          $flag_t=true;
      }
      $headdepartment=null;
      if ($flag_hd) {
        $headdepartment = HeadDepartment::where('employee_id', $employee->id)->first();
      }
      $teachersubjects=null;
      if ($flag_t) {
        $teacher=Teacher::where('employee_id',$employee->id)->first();
        $teachersubjects = TeacherSubject::where('teacher_id', $teacher->id)->get();
      }
      
      $department = Department::all();
      $subjects = Subject::all();
      return view('users.show')->with('user',$user)->with('types',$types)->with('employee',$employee)
      ->with('subjects',$subjects)->with('teachersubjects',$teachersubjects)->with('departments',$department)
      ->with('headdepartment',$headdepartment);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user=Users::findOrFail($id);
        //
        // return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      //dd($request);
      $user = Users::findOrFail($request->id);
      $user->name = $request->name;
      if($request->password != null )
        $user->password = Hash::make($request->password);
      $user->email = $request->email;
      if($request->hasFile('image'))
      {
          if($user->image != 'user.png'){
              Storage::delete($user->image);
          }
          $user->image =  $request->file('image')->store('public');
      }
      $user->save();

      $employee=Employee::where('user_id',$user->id)->first();
      $employee->code = $request->code;
      $employee->contract = $request->contract;
      $employee->appointment = $request->appointment;
      $employee->save();

      if($request->type_head_department == "on")
      {
        $head_department = HeadDepartment::where('employee_id',$employee->id)->first();
        $head_department->delete();
        $headdepartment=HeadDepartment::create([
          'employee_id' => $employee->id,
          'department_id' => $request->department_id,
        ]);
        
      }

      if($request->type_teacher == "on")
      {
        $teacher = Teacher::where('employee_id',$employee->id)->first();
        $teacher_subjects = TeacherSubject::where('teacher_id',$teacher->id)->get();
        foreach($teacher_subjects as $teacher_subject)
          $teacher_subject->delete();
        foreach ($request->teachersubject as $teachersubject) {
          $teachersubject_new=TeacherSubject::create([
            'subject_id' => $teachersubject,
            'teacher_id' => $teacher->id,
          ]);
        }
      }

      /* $type = Type::where('user_id',$request->id)->firstOrFail();
      $type->user_type = $request->user_type;
      $type->save(); */



      $msg = [
        'title' => 'Modificado!',
        'text' => 'Usuario modificado exitosamente.',
        'icon' => 'success',
        ];
        if(\Auth::user()->id == $request->id)
        {
          return redirect('users')->with('message', $msg);
        }
        return redirect('users')->with('message', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
      $user=Users::findOrFail($user);
      $user->delete();
    $msg = [
        'title' => 'Eliminado!',
        'text' => 'Usuario eliminado exitosamente.',
        'icon' => 'success'
    ];

    return response()->json($msg);
    }
}