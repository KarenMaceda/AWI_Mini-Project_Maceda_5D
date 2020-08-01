@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/netflixs/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="text" name="type" id="type">
                    </div>
                    <div class="form-group">
                        <label for="country">country</label>
                        <input class="form-control" type="text" name="country" id="country">
                    </div>
                    <div class="form-group">
                        <label for="release_year">Release year</label>
                        <input class="form-control" type="text" name="release_year" id="release_year">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" class="form-control">
                    </div>
                    <a href="/admin/netflixs/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection