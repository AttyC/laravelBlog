<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index() 
    {

        $tasks = Task::all(); //Eloquent

        return view('tasks.index', ['tasks' => $tasks]); 

    }

    public function show(Task $task) // Task::find(wildcard)
    {
       return view('tasks.show', ['task' => $task]); 

    }
}
