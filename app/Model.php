<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	//  Assign fillable table columns
    // protected $fillable = ['title', 'body'];
    // 
    // Or better, yet, define which table columns must not be fillable
	protected $guarded = [];
}
