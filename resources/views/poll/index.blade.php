@extends('admin.layout')

@section('adminlte_css')
  <meta name="csrf-token" = content="{{ csrf_token() }}">
@stop

@section('content-header')
  <h1>
    Encuestas
  </h1>
@stop

@section('content')
      <h2>Lista de Encuestas</h2>

      <a class="btn btn-success btn-md addNew" style="float: right;" href="{{ url('poll/create') }}"><b>Agregar Encuesta</b></a><br><br>

      <div class="box-body">
          <table id="polls_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Tipo de encuesta</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>
@stop

@section('adminlte_js')
@include('poll.partials.script')
@stop
