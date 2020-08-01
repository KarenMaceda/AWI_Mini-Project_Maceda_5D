@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/toys/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="product_name">Name</label>
                        <input class="form-control" description="text" name="product_name" id="product_name">
                    </div>
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <input class="form-control" description="text" name="manufacturer" id="manufacturer">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input description="text" name="price" id="price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" description="text" name="description" id="description">
                    </div>
                    <a href="/admin/toys/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button description="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection