<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // $posts = Post::latest()->get();
        
        $posts = Post::latest();

        if ($request = request(['month', 'year'])) {
            $posts->filter($request);
        }

        $posts = $posts->get();

        // $posts = Post::latest()
        //     ->filter(request(['month','year']))
        //     ->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) DESC')
            ->get()
            ->toArray();

    	return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
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

    	// POST::create(request(['title','body', 'user_id']));

        // POST::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);
        
        //  Use the User currently Authenticated to write the post
        //  Instantiate a post Eqloquent Model and pass it to the publish method in the User Controller
         auth()->user()->publish(
            new Post(request(['title', 'body']))
         );

    	return redirect('/');
    }
}
