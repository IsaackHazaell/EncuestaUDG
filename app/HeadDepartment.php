<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadDepartment extends Model
{
  protected $fillable = [
    'department_id', 'employee_id',
  ];
}
