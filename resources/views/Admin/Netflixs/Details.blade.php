@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $netflix->title}}</b></h4>
                        <p class="card-text"><b></b> {{ $netflix->type }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Country: </b> {{ $netflix->country }}</li>
                        <li class="list-group-item"><b>Release year: </b> {{ $netflix->release_year }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/netflixs/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/netflixs/edit/{{ $netflix->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/netflixs/delete/{{ $netflix->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
