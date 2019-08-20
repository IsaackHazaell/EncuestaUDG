
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Departamento</h4>
      </div>
      <form action="{{route('department.update','modifydepartment')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group col-md-6">
              <label for="department_name">Departamento</label>
              <input type="text" class="form-control" name="department_name" id="department_name">
            </div>
            
            {{-- <div class="form-group col-md-6">
                <label for="user_id">Seleccione el usuario</label>
                <select class="form-control" name="user_id" id="user_id">
                  @foreach($users as $user)
                    <option value="{{$user->id}}" {{ isset($user) && $user->id == $user->name ? 'selected' : '' }}>{{$user->name}}</option>
                  @endforeach
                </select>
            </div> --}}
      </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>
