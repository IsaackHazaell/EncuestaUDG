@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Grupo
    <small>Asignar grupo</small>
  </h1>
</section>

<form action="{{url('group')}}" method="post">
  {{csrf_field()}}
<div class="box-body">
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('group') }}"><b>Lista de grupos</b></a><br><br>
      </div>
      {{-- Aqui van los imputs --}}
      @include('group.form')
      <div class="form-group col-md-8">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    </div>
</form>
@endsection
@section('adminlte_js')
<script>
    $("#group_id").select2({});
    $("#groupsuebject_id").select2({});
    $("#teachersubject_id").select2({});
    </script>
@stop