<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = [
      'employee_id',
  ];
  public function employee()
   {
       return $this->belongsTo('App\Employee');
   }

}
