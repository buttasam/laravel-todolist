@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{$tasklist->title}}</h2>
                        <p>
                            {{$tasklist->description}}
                        </p>
                    </div>


                </div>
            </div>

            <div id='app'>
                <task-list :todolist="{{$listId}}"></task-list>
            </div>
        </div>
    </div>
@endsection
