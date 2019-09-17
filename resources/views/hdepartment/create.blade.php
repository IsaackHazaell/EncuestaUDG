@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Jefe
    <small>Agregar Jefe</small>
  </h1>
</section>

<form action="{{url('hdepartment')}}" method="post">
  {{csrf_field()}}
<div class="box-body">
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('hdepartment') }}"><b>Lista de jefes</b></a><br><br>
      </div>
      @include('hdepartment.form')
      <div class="form-group col-md-8">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    </div>
</form>
@endsection
