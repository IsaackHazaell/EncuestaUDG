@extends('admin.layout')
@section('content')
{{-- @include('users.modal') --}}

<section class="content-header">
    <div class="form-group col-md-12">
        <div class="form-group col-md-6">
        <h2>Usuario</h2>
      </div>
      <div class="form-group col-md-6">
          <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('users') }}"><b>Lista de Usuarios</b></a><br><br>
        </div>
    </div>
  
</section>


<div class="box-body">
  <div class="form-row">
      <div class="form-group col-md-12">
          <img class="img-responsive" src="{{ Storage::url("../storage/{$user->image}") }}" width="190" height="190"/>
          
      </div>
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
    
    @foreach ($types as $type)  
      @if ($type->user_type == 1)
          <div class="form-row" id="div_boss">
            <div class="form-group col-md-6">
                <label for="">Departamento del que es jefe</label>
                <input type="text" class="form-control" name="jefe_departamento" id="jefe_departamento"readonly>
            </div>
          </div>          
      @endif
      @if ($type->user_type == 2)
          <div class="form-row">
            <div class="form-group col-md-6" id="div_profesor">
                <label for="dep_profesor">Departamento al que pertenece </label>
                <input class="form-control" name="dep_profesor" id="dep_profesor" readonly>
            </div>
          </div>
      @endif        
    @endforeach

    <div class=" form-group col-md-6">
      @foreach ($types as $type)
        <div class="form-check" style="display:inline-block" method="post">
          @if ($type->user_type == 0)
          <input onchange="nameDepartment()" checked class="form-check-input" type="checkbox" id="user_director" name="user_director" onclick="return false;" onchange="seleccionado()">
          <label class="form-check-label" for="user_director" style="padding-right:15px; padding-top:30px;">
            Director/Coordinador
          </label>          
          @endif
          @if ($type->user_type == 1)
          <input onchange="nameDepartment()" checked class="form-check-input" type="checkbox" id="user_jefe" name="user_jefe" onclick="return false;" onchange="seleccionado()">
          <label class="form-check-label" for="user_jefe" style="padding-right:15px; padding-top:30px;">
            Jefe de departamento
          </label>
          @endif
          @if ($type->user_type == 2)
            <input onchange="nameDepartment()" checked class="form-check-input" type="checkbox" id="user_profesor" name="user_profesor" onclick="return false;" onchange="seleccionado()">
            <label class="form-check-label" for="user_profesor" style="padding-right:15px; padding-top:30px;">
              Profesor
            </label>
          @endif
        </div>
      @endforeach
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
  </div>
@endsection

@section('adminlte_js')
@include('users.partials.script')
@stop
