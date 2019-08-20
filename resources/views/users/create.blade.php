@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Usuario
    <small>Agregar Usuario</small>
  </h1>
</section>

<form action="{{url('/users')}}" method="post" name="fcreate">
  {{csrf_field()}}
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('users') }}"><b>Lista de usuarios</b></a><br><br>
      </div>
    </div>
      @include('users.form')
      @include('employee.form')
      <div class="form-row" id="div_boss">
          <div class="form-group col-md-6">
              <label for="">Seleccione departamento del que es jefe</label>
              <select class="form-control" name="jefe_departamento" id="jefe_departamento" >
                  <option value="">Matematicas</option>
                  <option value="">Biologia</option>
                  <option value="">Artes</option>
              </select>
          </div>
        </div>
      @include('teacher.form')
      <div class=" form-group col-md-12">
          {{-- <label for="user_type">Seleccione el tipo de usuario</label>
          <select onchange="nameDepartment()" class="form-control" name="user_type" id="user_type" onchange="seleccionado()">
              <option value="0">Director o Coordinador</option>
              <option value="1">Jefe de departamento</option>
              <option value="2">Profesor</option>
          </select> --}}
          <div class="form-check" style="display:inline-block">
              <input onchange="nameDepartment()" class="form-check-input" type="checkbox" value="0" id="user_director" name="user_director" onchange="seleccionado()">
              <label class="form-check-label" for="user_type" style="padding-right:15px">
                Director/Coordinador
              </label>
            </div>

            <div class="form-check"style="display:inline-block">
              <input onchange="nameDepartment()" class="form-check-input" type="checkbox" value="1" id="user_jefe" name="user_jefe" onchange="seleccionado()">
              <label class="form-check-label" for="user_jefe" style="padding-right:15px">
                Jefe de departamento
              </label>
            </div>
            
            <div class="form-check"style="display:inline-block">
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" value="2" id="user_profesor" name="user_profesor" onchange="seleccionado()">
                <label class="form-check-label" for="user_profeso" style="padding-right:15px">
                  Profesor
                </label>
              </div>
      </div>
    <div class="form-group col-md-8">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection

@section('adminlte_js')
@include('users.partials.script_create')
@stop
