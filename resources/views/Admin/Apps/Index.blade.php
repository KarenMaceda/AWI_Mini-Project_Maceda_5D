@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Apps</h1>
                <a class="text-right" href="/admin/apps/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Size</th>
                        <th scope="col">Author(s)</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($apps as $app)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $app->App }}</td>
                        <td>{{ $app->Category }}</td>
                        <td>{{ $app->Size }}</td>
                        <td>{{ $app->Installs }}</td>
                        <td>
                            <a href="/admin/apps/{{ $app->_id }}">Details</a> |
                            <a href="/admin/apps/edit/{{ $app->_id }}">Edit</a> |
                            <a href="/admin/apps/delete/{{ $app->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection