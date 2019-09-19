@extends('admin.layout')
@section('content')
@include('users.modal')

<section class="content-header">
    <div class="form-group col-md-12">
        <div class="form-group col-md-6">
        <h2>Usuario</h2>
      </div>
      <div class="form-group col-md-6">
          <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('users') }}"><b>Lista de Usuarios</b></a><br><br>
        </div>
    </div>
  
</section>

<div class="box-body">
  <div class="form-row">
      <div class="form-group col-md-12">
          <img class="img-responsive" src="{{ Storage::url("../storage/{$user->image}") }}" width="190" height="190"/>
          
      </div>
  </div>
  <form action="{{route('users.update','modifyuser')}}" method="post" enctype="multipart/form-data">
    {{method_field('patch')}}
    {{csrf_field()}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" required name="name" id="name" value="{{$user->name}}" >
        </div>

        <div class="form-group col-md-6">
            <label for="email">Correo</label>
            <input type="email" class="form-control" required name="email" id="email" value="{{$user->email}}" >
        </div>
        
        <div class="form-group col-md-6">
          <label for="password">Cambiar contraseña</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>

            <div class="form-group col-md-6">
                <label for="code">Código de docente</label>
                <input type="number" class="form-control" required name="code" id="code"  value="{{$employee->code}}">
            </div>
        
           
                <div class="form-group col-md-6">
                    <label for="contract">Contrato</label>
                    <input type="text" class="form-control" name="contract" id="contract"  value="{{$employee->contract}}"> 
                </div>
        
                <div class="form-group col-md-6">
                    <label for="appointment">Nombramineto</label>
                    <input type="text" class="form-control" name="appointment" id="appointment"  value="{{$employee->appointment}}">
                </div>

                <div class="form-group col-md-6">
                  <label for="image">Actualizar foto de perfil</label>
                  <input type="file" class="form-control" name="image" id="image">
                </div>
          
 
    

    <div class=" form-group col-md-6">
      @foreach ($types as $type)
        <div class="form-check" style="display:inline-block" method="post">
          @if ($type->user_type == 0)
          
            <input onchange="nameDepartment()" checked class="form-check-input" type="checkbox" id="type_director" name="type_director" onclick="return false;" onchange="seleccionado()">
            <label class="form-check-label" for="type_director" style="padding-right:15px; padding-top:30px;">
              Director/Coordinador
            </label>       
             
          @endif
          @if ($type->user_type == 1)
          
            <input onchange="nameDepartment()" checked class="form-check-input" type="checkbox" id="type_head_department" name="type_head_department" onclick="return false;" onchange="seleccionado()">
            <label class="form-check-label" for="type_head_department" style="padding-right:15px; padding-top:30px;">
              Jefe de departamento
            </label>
          
          @endif
          @if ($type->user_type == 2)
          
            <input onchange="nameDepartment()" checked class="form-check-input" type="checkbox" id="type_teacher" name="type_teacher" onclick="return false;" onchange="seleccionado()">
            <label class="form-check-label" for="type_teacher" style="padding-right:15px; padding-top:30px;">
              Profesor
            </label>
          
          @endif
        </div>
      @endforeach
    </div>
    
    <div class="form-group col-md-12"></div>

    @foreach ($types as $type)  
      @if ($type->user_type == 1)
            <div class="form-group col-md-6">
              <label for="department_id">Departamento del que es jefe</label>
              <select class="form-control" name="department_id" id="department_id" >
                @foreach ($departments as $department)
                  <option value="{{$department->id}}" {{ ($headdepartment->department_id == $department->id) ? 'selected=selected' : '' }}>{{ $department->name }}</option>
                @endforeach
              </select>
            </div>
      @endif
      @if ($type->user_type == 2)
      <div class="form-group col-md-6">
        <label for="teachersubject">Materias que imparte</label>
        <select class="form-control" name="teachersubject[]" id="teachersubject" multiple>
          @foreach ($subjects as $subject)
            <option value="{{ $subject->id }}" 
              @foreach($teachersubjects as $tsubject)
                {{ ($tsubject->subject_id == $subject->id) ? 'selected=selected' : '' }}
              @endforeach>
              {{ $subject->name }}</option>
          @endforeach
        </select>
      </div>
      @endif        
    @endforeach

    <div class="form-group col-md-12"></div>

    <div class="form-group col-md-6">
    <input type="hidden" value="{{$user->id}}" id="id" name="id">
    <button type="submit" class="btn btn-primary">Actualizar información</button>
  </div>
</div>

</form>


  </div>
@endsection


@section('adminlte_js')
<script>
  $("#teachersubject").select2({
    theme: "classic"
  });
</script>
@stop