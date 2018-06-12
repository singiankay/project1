<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
		$tasks = Task::All();
		// $tasks = DB::table('tasks')->latest()->get();
	    return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
	    return view('tasks.show', compact('task'));
    }
}
