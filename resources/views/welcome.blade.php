@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(Auth::user() && Auth::user()->hasRole('admin'))
                            Logged as admin
                        @else
                            Wellcome user
                        @endif
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        {!! Form::open() !!}

                            <div class="form-group">
                                <label for="title">Title</label>
                                {{Form::text('title', '' , ['class' => 'form-control'])}}
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                {{Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3'])}}
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        {!! Form::close() !!}
                    </div>
                </div>

                <hr>


                <div class="row list-group center-block text-center">

                    <div class="list-group-item">
                        <div class="card-block">
                            <h3 class="card-title">Special title treatment</h3>
                            <p class="card-text">With </p>
                            <a href="#" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
