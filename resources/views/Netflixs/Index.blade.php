@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Netflix</h1>
                <div class="row">
                        @foreach($netflixs as $netflix)
                        <div class="card col-md-3">
                            <div class="card-body">
                            <br>
                                <h5 class="card-title">{{ $netflix->title }}</h5>
                                <p class="card-text">{{ $netflix->type }}</p>
                                <p class="card-text">{{ $netflix->release_year }}</p>
                                <a href="/netflixs/{{ $netflix->_id }}" class="btn btn-primary">View</a>
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

                                    <a href ="/netflixs?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($netflixCount/300); $i++)
                                    <a href="/netflixs?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/netflixs?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($netflixCount/300) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
                 <br>
            </div>
        </div>
    </div>
@endsection
