

  <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">{{ 'Nombre' }}</label>
          <input type="text" class="form-control" required name="name" id="name"
          value="">
        </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
          <label for="mail">{{ 'Correo' }}</label>
          <input type="email" class="form-control" name="email" id="email"
          value="">
        </div>

        <div class="form-group col-md-6">
          <label for="password">{{ 'Contraseña' }}</label>
          <input type="password" class="form-control" required name="password" id="password"
          value="">
        </div>
  </div>

  <div class="form-group col-md-6">
      <label for="type">Seleccione el tipo de usuario</label>
      <select onchange="nameDepartment()" class="form-control" name="type" id="type" onchange="seleccionado()">
          <option value="0">Director o Coordinador</option>
          <option value="1">Jefe de departamento</option>
          <option value="2">Profesor</option>
      </select>
  </div>
