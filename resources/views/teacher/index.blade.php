@extends('admin.layout')

@section('adminlte_css')
  <meta name="csrf-token" = content="{{ csrf_token() }}">
@stop

@section('content-header')
  <h1>
    Profesores
  </h1>
@stop

@section('content')
      <h2>Lista de Profesores</h2>

      <a class="btn btn-success btn-md addNew" style="float: right;" href="{{ url('teacher/create') }}"><b>Agregar Nuevo</b></a><br><br>

      <div class="box-body">
          <table id="teachers_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Nombramiento</th>
                  <th>Tipo de contrato</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>
      @include('teacher.modal')
@stop

@section('adminlte_js')
@include('teacher.partials.script')
@stop
