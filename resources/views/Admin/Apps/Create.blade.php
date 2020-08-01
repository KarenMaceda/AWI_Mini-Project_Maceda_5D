@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/apps/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="App">Name</label>
                        <input class="form-control" type="text" name="App" id="App">
                    </div>
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input class="form-control" type="text" name="Category" id="Category">
                    </div>
                    <div class="form-group">
                        <label for="Size">Size</label>
                        <input class="form-control" type="text" name="Size" id="Size">
                    </div>
                    <div class="form-group">
                        <label for="Installs">Installs</label>
                        <input class="form-control" type="text" name="Installs" id="Installs">
                    </div>
                    <a href="/admin/apps/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection