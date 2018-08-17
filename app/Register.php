<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{

//Note laravel automatically registers the details in registers i.e addin s to the class name Register and making R small letter

	// protected $table = 'table_name_in_database';
    //table columns goes here
    protected $fillable = ['full_name','email','phone','username','password','token'];//this fills only the columns stated herer
}
