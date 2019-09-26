<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupTeacher extends Model
{
    protected $fillable = [
        'groupsubject_id', 'teachersubject_id',
    ];

}
