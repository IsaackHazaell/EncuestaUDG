<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'semester', 'letter', 'turn', 'subject_id',
    ];

    public function polls()
    {
       return $this->belongsToMany('App\Poll');
    }

    public function subjects()
    {
       return $this->belongsToMany('App\Subject');
    }
}
