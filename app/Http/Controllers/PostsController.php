<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function show()
    {
    	return view('posts.show');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');
    	// $post->save();

    	// POST::create([
    	// 	'title' => request('title'),
    	// 	'body' => request('body')
    	// ]);
    	
    	$this->validate(request(), [
    		'title' => 'required|max:50'
    	]);
    	POST::create(request(['title','body']));
    	return redirect('/');
    }
}
