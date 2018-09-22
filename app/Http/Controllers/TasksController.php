<?php

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Support\Facades\Auth;

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
        $tasks = Task::all()->where('user_id', $userId);
        return view('tasks.index', ['tasks' => $tasks]);
    }
}
