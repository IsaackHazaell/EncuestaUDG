@extends('admin.layout')
@section('content')
@include('users.modal')

<section class="content-header">
  <h1>
    Usuario
  </h1>
</section>

<div class="form-group col-md-12">
    <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('users') }}"><b>Lista de Usuarios</b></a><br><br>
</div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" required name="name" id="name" value="{{$user->name}}" readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" required name="email" id="email" value="{{$user->email}}" readonly>
        </div>
        
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="code">Código de docente</label>
                <input type="number" class="form-control" required name="code" id="code" readonly value="{{$employee->code}}">
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="contract">Contrato</label>
                    <input type="text" class="form-control" name="contract" id="contract" readonly value="{{$employee->contract}}"> 
                </div>
        
                <div class="form-group col-md-6">
                    <label for="appointment">Nombramineto</label>
                    <input type="text" class="form-control" name="appointment" id="appointment" readonly value="{{$employee->appointment}}">
                </div>
            </div>  
        </div>
    </div>

    <div class="form-group col-md-6">
      <label for="user_type">Tipo de usuario</label>
      <input type="text" class="form-control" required name="user_type" id="user_type" value="{{$type->user_type}}" readonly>
    </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <button class="btn btn-success"
      data-iduser="{{$user->id}}"
      data-name="{{$user->name}}"
      data-email="{{$user->email}}"
      data-password="{{$user->password}}"
      data-user_type="{{$type->user_type}}"
      data-code="{{$employee->code}}"
      data-contract="{{$employee->contract}}"
      data-appointment="{{$employee->appointment}}""
      data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i>Editar</button>
</div>
</div>

@endsection

@section('adminlte_js')
@include('users.partials.script')
@stop
