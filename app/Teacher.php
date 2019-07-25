<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['code', 'name', 'contract_type', 'designation','user_type'];
}
