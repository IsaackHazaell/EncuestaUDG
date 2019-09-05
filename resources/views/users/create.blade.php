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
      <div class=" form-group col-md-12" >
          <div class="form-check" style="display:inline-block" method="post">
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="user_director" name="user_director" value="0">
                <label class="form-check-label" for="user_director" style="padding-right:15px">
                  Director/Coordinador
                </label>
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="user_jefe" name="user_jefe" value="0">
                <label class="form-check-label" for="user_jefe" style="padding-right:15px">
                  Jefe de departamento
                </label>
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="user_profesor" name="user_profesor" value="0">
                <label class="form-check-label" for="user_profesor" style="padding-right:15px">
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
