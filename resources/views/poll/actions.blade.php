<a title="Publicar" class="btn btn-success btn-sm">
  <span class="fa fa-send"></span>
</a>

<a title="Ver" href="{{ route('poll.show', $id) }}" class="btn btn-info btn-sm">
  <i class="fa fa-eye"></i>
</a>

<a title="Eliminar" poll_id="{{ $id }}" class="btn btn-danger btn-sm status-poll">
    <span class="fa fa-trash"></span>
</a>