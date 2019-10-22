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
       return $this->belongsToMany('App\Polls');
    }
}
