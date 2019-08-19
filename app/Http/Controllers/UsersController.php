<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use App\Department;
use App\Teacher;
use App\HeadDepartment;
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
          ->select('users.*','users.id as user_id','types.user_type','employees.*','employees.id as employee_id')
          ->join('types', 'types.user_id', '=', 'users.id')
          ->join('employees','employees.user_id','users.id')
          ->get();

          for($i=0; $i<$users->count(); $i++)
        {
          if($users[$i]->user_type == 0)
            $users[$i]->user_type = "Director o Coordinador";
          else if($users[$i]->user_type == 1)
            $users[$i]->user_type = "Jefe de departamento";
            else if($users[$i]->user_type == 2)
              $users[$i]->user_type = "Profesor";
        }

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
      return view('users.create');
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
       $user->password = Hash::make($request->password);
       $user->email= $request->email;
      $user->save();     

       $type=Type::create([
        'user_id' => $user->id,
        'user_type' => $request->user_type,
          ]);

        $employee=Employee::create([
                'code' => $request->code,
                'contract' => $request->contract,
                'appointment' => $request->appointment,
                'user_id' => $user->id,
            ]);

        if ($request->user_type==1) {
          $department=Department::create([
                      'name' => $request->department_name ,
                  ]);
          $headdepartment=HeadDepartment::create([
                      'department_id' => $department->id,
                      'employee_id' => $employee->id,
                  ]);
         }else if($request->user_type==2) {
           $teacher=Teacher::create([
                      'employee_id' => $employee->id,
                    ]);
         }


            ///

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
      $type = Type::where('user_id',$user->id)->firstOrFail();
        if($type->user_type == 0)
          $type->user_type = "Director o Coordinador";
        else if($type->user_type == 1)
          $type->user_type = "Jefe de departamento";
          else if($type->user_type == 2)
            $type->user_type = "Profesor";
      return view('users.show')->with('user',$user)->with('type',$type)->with('employee',$employee);
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
      $user = Users::findOrFail($request->id);
  
        $user->name = $request->name;
        if($request->password != $user->password )
      {
        $user->password = Hash::make($request->password);
      }
        $user->email = $request->email;

    if($request->hasFile('image'))
      {
          if($user->image != 'user.png'){
              Storage::delete($user->image);
          }
          $user->image =  $request->file('image')->store('public');
      }      
      $user->save();

      $type = Type::where('user_id',$request->id)->firstOrFail();
      $type->user_type = $request->user_type;
      $type->save();

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