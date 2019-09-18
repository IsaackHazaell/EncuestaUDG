<div class="form-row" id="div_profesor">
  <div class="form-group col-md-6">
    <label for="">Seleccione departamento al que pertenece</label>
    <select class="form-control" name="teacherdepartment[]" id="teacherdepartment" multiple>
      @foreach ($departments as $department)
    <option value="{{ $department->id }}">{{ $department->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group col-md-6">
    <label for="">Materias que imparte</label>
    <select class="form-control" name="teachersubject[]" id="teachersubject" multiple>
      @foreach ($subjects as $subject)
    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
      @endforeach
    </select>
  </div>
</div>