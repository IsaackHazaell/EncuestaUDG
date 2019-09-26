<div class="form-row">
    <div class="form-group col-md-6">
      <label for="group_id">Grupo</label>
      <select class="form-control" name="group_id" id="group_id">
        @foreach ($groups as $group)
      <option value="{{ $group->id }}">{{ $group->semester }}-{{ $group->letter }}/{{ $group->turn }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="groupsubject_id">Grupo</label>
      <select class="form-control" name="groupsubject_id" id="groupsuebject_id">
        @foreach ($groupsubjects as $groupsubject)
      <option value="{{ $groupsubject->id }}">{{ $groupsubject->subject->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="teachersubject_id">Grupo</label>
      <select class="form-control" name="teachersubject_id" id="teachersubject_id">
        @foreach ($teachersubjects as $teachersubject)
      <option value="{{ $teachersubject->id }}">{{ $teachersubject->teacher->employee->user->name }}</option>
        @endforeach
      </select>
    </div>
</div>