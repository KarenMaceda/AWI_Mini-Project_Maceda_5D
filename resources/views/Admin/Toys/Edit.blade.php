@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/toys/edit" method= "POST">
                @csrf
                <input type="hidden" name="toyid" id="toyid" value="{{ $toy->_id }}">
                    <div class="form-group">
                        <label for="product_name">Name</label>
                        <input class="form-control" type="text" name="product_name" id="product_name" value="{{ $toy->product_name }}">
                    </div>
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <input class="form-control" type="text" name="manufacturer" id="manufacturer" value="{{ $toy->manufacturer }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" type="text" name="price" id="price" class="form-control" value="{{ $toy->price }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" class="form-control" value="{{ $toy->description }}">
                    </div>
                <a href="/admin/toys/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection