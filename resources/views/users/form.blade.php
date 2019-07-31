
  {{ $Modo=='edit'}}

  <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">{{ 'Nombre' }}</label>
          <input type="text" class="form-control" required name="name" id="name"
          value="{{ isset($user->name)?$user->name:'' }}">
        </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
          <label for="mail">{{ 'Correo' }}</label>
          <input type="email" class="form-control" name="email" id="email"
          value="{{ isset($user->email)?$user->email:'' }}">
        </div>

        <div class="form-group col-md-6">
          <label for="name">{{ 'Contraseña' }}</label>
          <input type="text" class="form-control" required name="password" id="password"
          value="{{ isset($user->password)?$user->password:'' }}">
        </div>
  </div>

  <div class="form-group col-md-6">
      <label for="user_type">Seleccione el tipo de usuario</label>
      <select class="form-control" name="type" id="type">
          <option value="0">Director o Coordinador</option>
          <option value="1">Jefe de departamento</option>
          <option value="2">Profesor</option>
      </select>
  </div>
