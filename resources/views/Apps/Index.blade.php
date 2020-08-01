@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Apps</h1>
                <div class="row">
                        @foreach($apps as $app)
                        <div class="card col-md-3">
                            <div class="card-body">
                            <br>
                                <h5 class="card-title">{{ $app->App }}</h5>
                                <p class="card-text">{{ $app->Category }}</p>
                                <p class="card-text">Installs: {{ $app->Installs }}</p>
                                <a href="/apps/{{ $app->_id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <br>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/apps?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($appCount/500); $i++)
                                    <a href="/apps?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/apps?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($appCount/500) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
