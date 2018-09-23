@extends('layouts.app')

@section('content')
    <div class="col-md-6">
        <div>
            <h3>{{$task->title}}</h3>
            <form action="/tasks/{{$task->id}}/complete" method="POST">
                {{ csrf_field() }}
                <div>
                    @if(!$task->completed)
                        <button type="submit" class="btn btn-default btn-primary">
                            Complete
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>

@endsection
