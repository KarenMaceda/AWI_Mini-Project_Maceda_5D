@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Netflix</h1>
                <a class="text-right" href="/admin/netflixs/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">type</th>
                        <th scope="col">Country</th>
                        <th scope="col">Release Year</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($netflixs as $netflix)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $netflix->title }}</td>
                        <td>{{ $netflix->type }}</td>
                        <td>{{ $netflix->country }}</td>
                        <td>{{ $netflix->release_year }}</td>
                        <td>
                            <a href="/admin/netflixs/{{ $netflix->_id }}">Details</a> |
                            <a href="/admin/netflixs/edit/{{ $netflix->_id }}">Edit</a> |
                            <a href="/admin/netflixs/delete/{{ $netflix->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection