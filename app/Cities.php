<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = "cities";
    public $timestamps = false;
    protected $guarded = [];
}
