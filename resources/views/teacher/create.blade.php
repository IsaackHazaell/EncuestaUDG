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
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
      <div class="form-group col-md-6">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('teacher') }}"><b>Lista de profesores</b></a><br><br>
      </div>
    </div>
</form>
@endsection
