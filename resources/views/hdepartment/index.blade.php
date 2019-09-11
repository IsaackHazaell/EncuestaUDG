@extends('admin.layout')

@section('adminlte_css')
  <meta name="csrf-token" = content="{{ csrf_token() }}">
@stop

@section('content-header')
  <h1>
    Jefes de departamento
  </h1>
@stop

@section('content')
      <h2>Lista de Jefes</h2>

      <a class="btn btn-success btn-md addNew" style="float: right;" href="{{ url('hdepartment/create') }}"><b>Agregar Nuevo</b></a><br><br>

      <div class="box-body">
          <table id="hdepartments_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Departamento</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>
      @include('hdepartment.modal')
@stop

@section('adminlte_js')
@include('hdepartment.partials.script')
@stop