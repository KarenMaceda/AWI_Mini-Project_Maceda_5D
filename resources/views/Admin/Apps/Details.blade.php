@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $app->App}}</b></h4>
                        <p class="card-text"><b>Size: </b> {{ $app->Size }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Category: </b> {{ $app->Category }}</li>
                        <li class="list-group-item"><b>Installs: </b> {{ $app->Installs }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/apps/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/apps/edit/{{ $app->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/apps/delete/{{ $app->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
