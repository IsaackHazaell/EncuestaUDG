<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDepartment extends Model
{
    protected $fillable = [
        'department_id','teacher_id'
    ];
  
}
