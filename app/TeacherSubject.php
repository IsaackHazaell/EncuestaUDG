<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherSubject extends Model
{
    protected $fillable = [
        'subject_id','teacher_id'
    ];

    public function subject()
   {
       return $this->belongsTo('App\Subject');
   }

   public function teacher()
   {
       return $this->belongsTo('App\Teacher');
   }
}
