<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	//  Assign fillable table columns
    // protected $fillable = ['title', 'body'];
    // 
    // Or better, yet, define which table columns must not be fillable
	// protected $guarded = [];

	public function comments() 
	{
		return $this->hasMany(Comment::class);
	}

	
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addComment($body, $user_id)
	{
		$this->comments()->create(compact('body', 'user_id'));
		// Comment::create([
		// 	'body' => $body,
		// 	'post_id' => $this->id
		// ]);
	}

	public function scopeFilter($query, $filters)
	{
	    if($month = $filters['month']) {
	        $query->whereMonth('created_at', Carbon::parse($month)->month);
	    }
	    if($year = $filters['year']) {
	        $query->whereYear('created_at', $year);
	    }
	    $query = $query->get();
	}

	public static function archives()
	{
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
		    ->groupBy('year', 'month')
		    ->orderByRaw('min(created_at) DESC')
		    ->get()
		    ->toArray();
	}
}
