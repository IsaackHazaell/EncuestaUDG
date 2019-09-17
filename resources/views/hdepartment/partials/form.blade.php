<div class="form-row" id="div_boss">
    <div class="form-group col-md-6">
        <label for="">Seleccione departamento del que es jefe</label>
        <select class="form-control" name="jefe_departamento" id="jefe_departamento" >
          @foreach ($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
          @endforeach
        </select>
    </div>
  </div>