<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllTasks()
    {
        $tasks = Task::orderBy('task_id', 'desc')->get();
        return view('home',compact('tasks'));

    }
}
