@extends('layouts.app')

@section('content')
    <div class="col-md-6">
        <div>
            <h3>{{$task->title}}</h3>
            <div>
                <button type="submit" class="btn btn-default btn-primary">
                    Complete
                </button>
            </div>
        </div>
    </div>

@endsection
