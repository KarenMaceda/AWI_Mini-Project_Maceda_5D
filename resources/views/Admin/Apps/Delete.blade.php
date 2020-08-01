@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/apps/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="appid" id="appid" value="{{ $app->_id }}">
                <div class="form-group">
                        <label for="App">Name</label>
                        <input class="form-control" type="text" name="App" id="App" value="{{ $app->App }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input class="form-control" type="int" name="Category" id="Category" value="{{ $app->Category }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Size">Size</label>
                        <input class="form-control" type="int" name="Size" id="Size" value="{{ $app->Size }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Installs">Installs</label>
                        <input class="form-control" type="int" name="Installs" id="Installs" value="{{ $app->Installs }}" disabled>
                    </div>
                    <a href="/admin/apps/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection