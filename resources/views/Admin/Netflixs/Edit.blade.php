@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/netflixs/edit" method= "POST">
                @csrf
                <input type="hidden" name="netflixid" id="netflixid" value="{{ $netflix->_id }}">
                <div class="form-group">
                        <label for="title">Name</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $netflix->title }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="text" name="type" id="type" value="{{ $netflix->type }}">
                    </div>
                    <div class="form-group">
                        <label for="country">country</label>
                        <input class="form-control" type="text" name="country" id="country" value="{{ $netflix->country }}">
                    </div>
                    <div class="form-group">
                        <label for="release_year">Release year</label>
                        <input class="form-control" type="text" name="release_year" id="release_year" value="{{ $netflix->release_year }}">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $netflix->description }}">
                    </div>
                <a href="/admin/netflixs/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection