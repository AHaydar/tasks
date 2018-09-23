<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::user()->id;
        $tasks = Task::all()
            ->where('user_id', $userId)
            ->sortBy('completed');
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function store(Request $request)
    {

        $task = new Task();
        $task->title = $request->input('title');
        $task->user_id = Auth::user()->id;
        $task->completed = false;

        $task->save();

        return redirect('/tasks');

    }
}
