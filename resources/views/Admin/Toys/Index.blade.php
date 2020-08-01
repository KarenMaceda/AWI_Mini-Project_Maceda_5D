@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Toys</h1>
                <a class="text-right" href="/admin/toys/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">Price</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($toys as $toy)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $toy->product_name }}</td>
                        <td>{{ $toy->manufacturer }}</td>
                        <td>{{ $toy->price }}</td>
                        <td>
                            <a href="/admin/toys/{{ $toy->_id }}">Details</a> |
                            <a href="/admin/toys/edit/{{ $toy->_id }}">Edit</a> |
                            <a href="/admin/toys/delete/{{ $toy->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection