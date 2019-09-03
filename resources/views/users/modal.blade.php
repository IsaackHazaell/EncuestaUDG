
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>
 
