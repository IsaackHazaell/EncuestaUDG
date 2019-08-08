
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
      </div>
      <form action="{{route('users.update','modifyuser')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="id" id="id">
        @include('users.form')
        <div class="form-group col-md-6">
          <label for="user_type">Seleccione el tipo de usuario</label>
          <select onchange="nameDepartment()" class="form-control" name="user_type" id="user_type" onchange="seleccionado()">
              <option value="0">Director o Coordinador</option>
              <option value="1">Jefe de departamento</option>
              <option value="2">Profesor</option>
          </select>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>
