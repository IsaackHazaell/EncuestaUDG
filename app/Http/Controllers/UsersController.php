<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;

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
          ->select('users.*')
          ->get();

          for($i=0; $i<$users->count(); $i++)
        {
          if($users[$i]->type == 0)
            $users[$i]->type = "Director o coordinador";
          else if($users[$i]->type == 1)
            $users[$i]->type = "Jefe de departamento";
            else if($users[$i]->type == 2)
              $users[$i]->type = "Profesor";
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
        $datosusuario=request()->all();

        $datosusuario=request()->except('_token');

        Users::insert($datosusuario);

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
    public function show(Users $users)
    {
        //
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
      // dd($request);
      $user = Users::findOrFail($request->id);
      $input = $request->except('password');
      if($request->password != $user->password )
      {
        $user->password = Hash::make($request->password);
      }
      // dd($input->name);
      $user->fill($input)->save();
      $user->type = $request->type;
      $user->save();

      $msg = [
        'title' => 'Modificado!',
        'text' => 'Usuario modificado exitosamente.',
        'icon' => 'success',
        ];
        if(\Auth::user()->id == $request->id)
        {
          return redirect('home')->with('message', $msg);
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
