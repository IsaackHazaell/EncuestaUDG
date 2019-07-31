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
      <h2>Lista de Ususarios</h2>

      <a class="btn btn-success btn-md addNew" style="float: right;" href="{{ url('users/create') }}"><b>Agregar Usuario</b></a><br><br>

      <div class="box-body">
          <table id="users_table" class="table table-striped table-bordered" >
          <thead>
              <tr>
                  <th>Nombre completo</th>
                  <th>Correo</th>
                  <th>Tipo</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>
      @include('users.modal')
@stop

@section('adminlte_js')
@include('users.partials.script')
@stop
