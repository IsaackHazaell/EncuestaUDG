<a title="Publicar" class="btn btn-success btn-sm">
  <span class="fa fa-send"></span>
</a>

<a title="Ver" href="{{ route('poll.show', $id) }}" class="btn btn-info btn-sm">
  <i class="fa fa-eye"></i>
</a>

<button title="Editar" class="btn btn-primary btn-sm"
  data-id="{{$id}}"
  data-name="{{$name}}"
  data-type="{{$type}}"
  data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i>
</button>

<a title="Eliminar" poll_id="{{ $id }}" class="btn btn-danger btn-sm status-poll">
    <span class="fa fa-trash"></span>
</a>