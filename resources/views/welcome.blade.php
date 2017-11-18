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
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">List name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Description</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        </form>
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
