@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Departamentos
    <small>Agregar Departamento</small>
  </h1>
</section>

<form action="{{url('department')}}" method="post">
  {{csrf_field()}}
<div class="box-body">
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('department') }}"><b>Lista de departamentos</b></a><br><br>
      </div>
      @include('department.partials.form')
      <div class="form-group col-md-8">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    </div>
</form>
@endsection
