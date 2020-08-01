@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Toys</h1>
                <div class="row">
                        @foreach($toys as $toy)
                        <div class="card col-md-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $toy->product_name }}</h5>
                                <p class="card-text">{{ $toy->manufacturer }}</p>
                                <p class="card-text">{{ $toy->price }}</p>
                                <a href="/toys/{{ $toy->_id }}" class="btn btn-primary">View</a>
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

                                    <a href ="/toys?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($toyCount/500); $i++)
                                    <a href="/toys?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/toys?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($toyCount/500) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
                 <br>
            </div>
        </div>
    </div>
@endsection
