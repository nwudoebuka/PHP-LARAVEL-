<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = ['reg_no','userid','program','courses','screening_score','average_score'];
}
