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
      <select class="form-control" name="poll_group" id="poll_group" multiple>
        @foreach ($groups as $group)
      <option value="{{ $group->id }}">{{ $group->semester }}-{{ $group->letter }}/{{ $group->turn }}</option>
        @endforeach
      </select>
    </div>
</div>

<div class=" form-group col-md-12" >
    <div class="form-check" style="display:inline-block" method="post">
          <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="poll_allgroup" name="poll_allgroup" value="1">
          <label class="form-check-label" for="poll_allgroup" style="padding-right:15px">
            Todos los grupos
          </label>
    </div>
</div>

<div id="addinput">
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for=poll_group>Seleccione grupo</label>
          <input type="text" class="form-control" name="poll_group" id="poll_group">
          <button id="addinput" onClick="addinput()" class=" btn btn-add glyphicon glyphicon-plus" style="margin-top:3px"></button>
        </div>
    </div>
</div>