@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h1 class="card-title">{{ $toy->product_name }}</h1>
                    <h3 class="card-subtitle mb-2 text-muted">{{ $toy->price }}</h3>
                    <p class="card-text">Manufacturer: {{ $toy->manufacturer }}</p>
                    <p class="card-text"><b>Description:</b> {{ $toy->description }}</p>
                </div>
                <div class="card-footer">
                    <p>Rating:</p>
                    <input type="radio" name="rating" id="rating">&nbsp1 </input>
                    <input type="radio" name="rating" id="rating">&nbsp2 </input>
                    <input type="radio" name="rating" id="rating">&nbsp3 </input>
                    <input type="radio" name="rating" id="rating">&nbsp4 </input>
                    <input type="radio" name="rating" id="rating">&nbsp5 </input>
                </div>
                <br>
            </div>

            <div class="col-md-12">
                <h1> <br> Add Comments </br> </h1>
                <form action="/toys/comment" method="POST">
                    @csrf
                    <input type="hidden" name="toyid" id="toyid" value="{{ $toy->_id }}">
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


            <a href="/toys/" class="card-link"> <br>&nbsp&nbsp&nbsp&nbsp&nbspGo back </br> </a> 

        </div>
    </div>
@endsection