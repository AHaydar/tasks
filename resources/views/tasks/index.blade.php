@extends('layouts.app')

@section('content')
        <div class="col-md-6">
            <div class="todolist">
                <h3>My List</h3>
                <hr>
                <ul>
                    @foreach($tasks as $task)
                    <li>
                        <label>
                            <input type="checkbox">
                            {{$task->title}}
                        </label>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
@endsection

