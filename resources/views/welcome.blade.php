@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">



            <div class="col-md-8 col-md-offset-2">

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a style="text-decoration: none" data-toggle="collapse" href="#collapse1">Add TODO list</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        {!! Form::open(['action' => 'HomeController@saveList', 'method' => 'POST']) !!}

                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            {{Form::text('title', '' , ['class' => 'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            {{Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3'])}}
                                        </div>
                                        {{Form::submit('Save', ['class' => 'btn btn-primary btn-lg'])}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="row list-group center-block text-center">

                    @foreach($tasklists as $tasklist)

                        <div class="list-group-item">
                            <div class="card-block">
                                <h3 class="card-title">{{$tasklist->title}}</h3>
                                <p class="card-text">{{$tasklist->description}}</p>
                                <a href="{{url('/tasklist', $tasklist->id)}}" class="btn btn-success">Go to TODO list</a>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection
