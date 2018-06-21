<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable = ['from_id','to_id','text'];
}
