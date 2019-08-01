@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Profesor
    <small>Agregar Profesor</small>
  </h1>
</section>

<form action="{{url('teacher')}}" method="post">
  {{csrf_field()}}
<div class="box-body">
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('teacher') }}"><b>Lista de profesores</b></a><br><br>
      </div>
      @include('employee.form')
      <div class="form-group col-md-8">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    </div>
</form>
@endsection
