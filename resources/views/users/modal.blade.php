
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
      </div>
      <form action="{{route('users.update','modifyuser')}}" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="image">{{ 'Imagen' }}</label>
                  <input type="file" class="form-control" name="image" id="image" value="">
                </div>
            </div>
        </div>
        @include('users.form')
        @include('employee.form')
        <div class=" form-group col-md-6" >
          <div class="form-check" style="display:inline-block; padding-top:15px;" method="post">
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="user_director" name="user_director" value="1">
                <label class="form-check-label" for="user_director" style="padding-right:15px">
                  Director/Coordinador
                </label>
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="user_profesor" name="user_profesor" value="1">
                <label class="form-check-label" for="user_profesor" style="padding-right:15px">
                  Profesor
                </label>
                <br>
                <input onchange="nameDepartment()" class="form-check-input" type="checkbox" id="user_jefe" name="user_jefe" value="1">
                <label class="form-check-label" for="user_jefe" style="padding-right:15px">
                  Jefe de departamento
                </label>              
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
 
