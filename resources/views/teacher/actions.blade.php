<button class="btn btn-primary btn-sm"
  data-idteacher="{{$teacher_id}}"
  data-code="{{$code}}"
  data-name="{{$user_id}}"
  data-contract="{{$contract}}"
  data-appointment="{{$appointment}}"
  data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>

  <a id_teacher="{{ $teacher_id }}" class="btn btn-danger btn-sm status-teacher">
      <span class="fa fa-trash"></span>
  </a>
