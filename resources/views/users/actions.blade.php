<a href="{{ route('users.show', $user_id) }}" class="btn btn-info btn-sm">
  <i class="fa fa-eye"></i></a>

<button class="btn btn-primary btn-sm"
  data-iduser="{{$id}}"
  data-name="{{$name}}"
  data-email="{{$email}}"
  data-password="{{$password}}"
  data-code="{{$code}}"
  data-contract="{{$contract}}"
  data-appointment="{{$appointment}}""
  data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>

  <a id_user="{{ $id }}" class="btn btn-danger btn-sm status-user">
      <span class="fa fa-trash"></span>
  </a>
