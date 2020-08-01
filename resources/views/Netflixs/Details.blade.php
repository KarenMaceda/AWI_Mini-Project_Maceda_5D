@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h1 class="card-title">{{ $netflix->title }}</h1>
                    <h3 class="card-subtitle mb-2 text-muted">{{ $netflix->type }}</h3>
                    <p class="card-text">{{ $netflix->country }}</p>
                    <p class="card-text">{{ $netflix->release_year }}</p>
                    <p class="card-text">Description: {{ $netflix->description }}</p>
                </div>
                <div class="card-footer">
                    <p>Rating:</p>
                    <input type="radio" name="rating" id="rating">&nbsp1 </input>
                    <input type="radio" name="rating" id="rating">&nbsp2 </input>
                    <input type="radio" name="rating" id="rating">&nbsp3 </input>
                    <input type="radio" name="rating" id="rating">&nbsp4 </input>
                    <input type="radio" name="rating" id="rating">&nbsp5 </input>
                </div>
            </div>
            <div class="col-md-12">
                <h1> <br> Add Comments </br> </h1>
                <form action="/netflixs/comment" method="POST">
                    @csrf
                    <input type="hidden" name="netflixid" id="netflixid" value="{{ $netflix->_id }}">
                    <div class="form-group">
                        <label for="userid">User ID</label>
                        <input type="text" class="form-control" name="userid" id="userid">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comments</label>
                        <textarea name="comment" id="comment" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Add comment</button>
                </form>
            </div>


            <a href="/netflixs/" class="card-link"> <br>&nbsp&nbsp&nbsp&nbsp&nbspGo back </br> </a> 

        </div>
    </div>
@endsection