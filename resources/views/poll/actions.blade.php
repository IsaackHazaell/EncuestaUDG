<a href="{{ route('polls.show', $poll_id) }}" class="btn btn-info btn-sm">
  <i class="fa fa-eye"></i>
</a>

{{-- <button class="btn btn-primary btn-sm"
  data-id="{{$poll_id}}"
  data-name="{{$name}}"
  data-type="{{$type}}"
  data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> --}}

<a id_user="{{ $poll_id }}" class="btn btn-danger btn-sm status-user">
    <span class="fa fa-trash"></span>
</a>