@extends('admin.layout')

@section('adminlte_css')
  <meta name="csrf-token" = content="{{ csrf_token() }}">
@stop

@section('content-header')
  <h1>
    Contancias
  </h1>
@stop

@section('content')
      <h2>Lista de Contancias</h2>

      <!--  <a class="btn btn-success btn-md addNew" style="float: right;" href="{{ url('poll/create') }}"><b>Crear Constancia</b></a><br><br> -->

      <div class="box-body">
          <table id="constancy_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Profesor</th>
                  <th>Semestre</th>
                  <th>Grupo</th>
                  <th>Turno</th>
                  <th>Materia</th>
                  <th>Departamento</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>
@stop

@section('adminlte_js')
@include('constancy.partials.script_admin')
@stop
