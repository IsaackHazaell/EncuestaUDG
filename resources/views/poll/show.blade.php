@extends('admin.layout')
@section('content')

<section class="content-header">
  <div class="form-group col-md-12">
    <div class="form-group col-md-6">
      <h2>Encuesta</h2>
    </div>
    <div class="form-group col-md-6">
      <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ route('poll.index') }}"><b>Lista de Encuestas</b></a><br><br>
    </div>
  </div>
</section>

<div class="box-body">
  <form action="{{route('poll.update', $poll->id)}}" method="post" enctype="multipart/form-data">
    {{method_field('patch')}}
    {{csrf_field()}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" required name="name" id="name" value="{{$poll->name}}" >
        </div>

        <div class="form-group col-md-6">
            <label for=poll_type>Seleccione tipo de encuesta</label>
            <select class="form-control" name="poll_type" id="poll_type" > 
                <option value="{{ 0 }}" {{ isset($poll) && $poll->type == 0 ? 'selected' : '' }}>5 respuestas</option>
                <option value="{{ 1 }}" {{ isset($poll) && $poll->type == 1 ? 'selected' : '' }}>2 respuestas</option>
            </select>
        </div>
          <div class="form-group col-md-6">
            <h5>Preguntas</h5>
          </div>
        @foreach ($questions as $question)
          <div class="form-group col-md-8">
              <input type="text" class="form-control" required name="questions[]" value="{{$question->question}}">
          </div>
        @endforeach
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