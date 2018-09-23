@extends('layouts.app')

@section('content')
        <div class="col-md-6">
            <div class="todolist">
                <h3>My List</h3>
                <hr>
                <!-- New Task Form -->
                <form action="/tasks/add" method="POST">
                {{ csrf_field() }}

                    <div>
                        <div class="input-group">
                            <input type="text" name="title" id="task-title" class="form-control">
                            <button type="submit" class="btn btn-default btn-primary">
                                Add Task
                            </button>
                        </div>
                    </div>

                </form>

                <div class="items">
                    <ul>
                        @foreach($tasks as $task)
                            @if($task->completed)
                                <li>
                                    <label>
                                        <input type="checkbox" checked>
                                        {{$task->title}}
                                    </label>
                                </li>
                            @else
                                <li>
                                    <label>
                                        <input type="checkbox" >
                                        {{$task->title}}
                                    </label>
                                </li>
                            @endif

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @include('layouts.errors')
@endsection

