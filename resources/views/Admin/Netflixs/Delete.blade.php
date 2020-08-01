@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/netflixs/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="netflixid" id="netflixid" value="{{ $netflix->_id }}">
                <div class="form-group">
                        <label for="title">title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $netflix->title }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="text" name="type" id="type" value="{{ $netflix->type }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="country">country</label>
                        <input class="form-control" type="text" name="country" id="country" value="{{ $netflix->country }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="release_year">Release year</label>
                        <input class="form-control" type="text" name="release_year" id="release_year" value="{{ $netflix->release_year }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" value="{{ $netflix->description }}" disabled>
                    </div>
                    <a href="/admin/netflixs/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection