@extends('admin.layout')

@section('adminlte_css')
  <meta name="csrf-token" = content="{{ csrf_token() }}">
@stop

@section('content-header')
  <h1>
    Departamentos
  </h1>
@stop

@section('content')
      <h2>Lista de Departamentos</h2>

      <a class="btn btn-success btn-md addNew" style="float: right;" href="{{ url('department/create') }}"><b>Agregar Nuevo</b></a><br><br>

      <div class="box-body">
          <table id="departments_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Departamento</th>
                  <th>Encargado</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>
      @include('department.modal')
@stop

@section('adminlte_js')
@include('department.partials.script')
@stop
