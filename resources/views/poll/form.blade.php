<div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">{{ 'Nombre' }}</label>
          <input type="text" class="form-control" name="name" id="name" value="" required>
        </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for=poll_type>Seleccione tipo de encuesta</label>
      <select class="form-control" name="poll_type" id="poll_type" >
        @foreach ($polls as $poll)
          <option value="{{ $poll->id }}">{{ $poll->type }}</option>
        @endforeach
      </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for=poll_group>Seleccione grupo</label>
      <select class="form-control" name="poll_group[]" id="poll_group" multiple>
        @foreach ($groups as $group)
          <option value="{{ $group->id }}">{{ $group->semester }}-{{ $group->letter }}/{{ $group->turn }}</option>
        @endforeach
      </select>
    </div>
</div>

<div class=" form-group col-md-12" >
    <div class="form-check" style="display:inline-block" method="post">
          <input class="btn btn-success" type="button" id="poll_allgroup" name="poll_allgroup" value="Añadir todos los grupos" onclick="getAll('poll_group')">
          <input class="btn btn-danger" type="button" id="poll_allgroup" name="poll_allgroup" value="Eliminar todos los grupos" onclick="eraseAll('poll_group')">
    </div>
</div>

<div>
  <form name="add_question" id="add_question">
    <table class="table table-bordered" id="dynamic_field">
      <tr>
        <td><input type="text" name="question[]" id="question" placeholder="Pregunta" class="form-control question_list"></td>
        <td><a name="add" id="add" class="btn btn-info">Agregar pregunta</a></td>
      </tr>
    </table>
  </form>
</div>