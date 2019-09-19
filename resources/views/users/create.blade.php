@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Usuario
    <small>Agregar Usuario</small>
  </h1>
</section>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{url('/users')}}" method="post" name="fcreate">
  {{csrf_field()}}
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('users') }}"><b>Lista de usuarios</b></a><br><br>
      </div>
    </div>
<div class="box-body">    
      @include('users.form')
      @include('employee.form')
      <div class="form-row" id="div_boss">
          <div class="form-group col-md-6">
              <label for="">Seleccione departamento del que es jefe</label>
              <select class="form-control" name="jefe_departamento" id="jefe_departamento" >
                @foreach ($departments as $department)
              <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
              </select>
          </div>
        </div>
      @include('teacher.form')
      <div class=" form-group col-md-12" >
          <div class="form-check" style="display:inline-block" method="post">
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="director" name="director" value="1">
                <label class="form-check-label" for="director" style="padding-right:15px">
                  Director/Coordinador
                </label>
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="bossdepartment" name="bossdepartment" value="1">
                <label class="form-check-label" for="bossdepartment" style="padding-right:15px">
                  Jefe de departamento
                </label>
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="teacher" name="teacher" value="1">
                <label class="form-check-label" for="teacher" style="padding-right:15px">
                  Profesor
                </label>
          </div>
      </div>
    <div class="form-group col-md-8">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>    
</form>
@endsection

@section('adminlte_js')
@include('users.partials.script_create')
<script>
$("#teachersubject").select2({
  theme: "classic"
});
</script>
@stop
