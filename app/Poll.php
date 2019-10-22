<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = ['id'];

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }
}
