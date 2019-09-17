
    <div class="form-group col-md-6">
        <label for="employee_id">Seleccione un profesor</label>
        <select class="form-control" name="employee_id" id="employee_id" >
          @foreach ($teachers as $teacher)
        <option value="{{ $teacher->employee->id }}">{{ $teacher->employee->user->name }}</option>
          @endforeach
        </select>
    </div>
    
    <div class="form-group col-md-6">
        <label for="department_id">Seleccione departamento del que es jefe</label>
        <select class="form-control" name="department_id" id="department_id" >
          @foreach ($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
          @endforeach
        </select>
    </div>
