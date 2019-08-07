<button class="btn btn-primary btn-sm"
  data-iddepartment="{{$department_id}}"
  data-department_name="{{$department_name}}"
  data-user_name="{{$user_id}}"
  data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>

  <a $department_id="{{ $department_id }}" class="btn btn-danger btn-sm status-teacher">
      <span class="fa fa-trash"></span>
  </a>
