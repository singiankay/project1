<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//  Assign fillable table columns
    // protected $fillable = ['title', 'body'];
    // 
    // Or better, yet, define which table columns must not be fillable
	protected $guarded = [];
}
