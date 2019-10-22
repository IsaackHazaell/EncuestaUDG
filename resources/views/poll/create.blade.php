@extends('admin.layout')
@section('content')

<section class="content-header">
  <h1>
    Encuesta
    <small>Agregar encuesta</small>
  </h1>
</section>

<form action="{{url('poll')}}" method="post">
  {{csrf_field()}}
<div class="box-body">
    <div class="form-row">
      <div class="form-group col-md-12">
        <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('poll') }}"><b>Lista de encuestas</b></a><br><br>
      </div>
      @include('poll.form')
      <div class="form-group col-md-8">
        <button type="submit" name="submit" id="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>
    </div>
</form>
@endsection

@section('adminlte_js')
<script>
  $("#poll_group").select2({
    theme: "classic"
  });
</script>
@include('poll.partials.script')
@stop
