@extends('admin.layout')
@section('content')

<section class="content-header">
  <div class="form-group col-md-12">
    <div class="form-group col-md-6">
      <h2>Encuesta</h2>
    </div>
    <div class="form-group col-md-6">
      <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('polls') }}"><b>Lista de Encuestas</b></a><br><br>
    </div>
  </div>
</section>

<div class="box-body">
  <form action="{{route('poll.update','modifyuser')}}" method="post" enctype="multipart/form-data">
    {{method_field('patch')}}
    {{csrf_field()}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" required name="name" id="name" value="{{$polls->name}}" >
        </div>

        <div class="form-group col-md-6">
            <label for=poll_type>Seleccione tipo de encuesta</label>
            <select class="form-control" name="poll_type" id="poll_type" > 
                <option value="0">5 Respuestas</option>
                <option value="1">2 Respuestas</option>
            </select>
        </div>
    </div>    
    
    <div class="form-group col-md-6">
        <input type="hidden" value="{{$poll->id}}" id="id" name="id">
        <button type="submit" class="btn btn-primary">Actualizar información</button>
    </div>
  </form>
</div>
@endsection


@section('adminlte_js')
<script>
  $("#teachersubject").select2({
    theme: "classic"
  });
</script>
@stop