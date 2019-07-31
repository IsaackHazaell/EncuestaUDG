@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Usuario
    <small>Editar Usuario</small>
  </h1>
</section>

<form action="{{url('/users/'.$user->id)}}" method="post" >
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('users') }}"><b>Lista de usuarios</b></a><br><br>
      </div>
    </div>
    @include('users.form',['Modo'=>'editar'])
    <div class="form-group col-md-8">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection
