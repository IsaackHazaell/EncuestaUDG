
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="code">Código de docente</label>
      <input type="number" class="form-control" required name="code" id="code">
    </div>

    <div class="form-row">
          <div class="form-group col-md-6">
            <label for="contract">Contrato</label>
            <input type="text" class="form-control" name="contract" id="contract">
          </div>

          <div class="form-group col-md-6">
            <label for="appointment">Nombramineto</label>
            <input type="text" class="form-control" name="appointment" id="appointment">
          </div>
    </div>

    <div class="form-group col-md-6">
        <label for="user_id">Seleccione el usuario</label>
        <select class="form-control" name="user_id" id="user_id">
          @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
    </div>

  </div>
