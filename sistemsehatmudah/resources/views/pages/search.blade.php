@extends('layouts/baseTamplate')
@section('content')
<!--    CONTENT-->
<section>
    <head>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/search.css') }}">
    </head>
    
    <div class="search-page">
        @if(isset($thread))
        <h4 style="color:white;">hasil pencarian ' <i><b style="color:white;">{{$query}}</b></i> '</h4>
        <div class="row">
            @foreach($thread as $thread)
            <div class="col-lg-4 col-md-6 search-card space-card">
                <div class="ui stackable cards">
                    <div class="card card-faris">
                        <img src="{{ URL::asset('gambar/'. $thread->idThread .'.jpg' )}}" width="100%" height="160vh" id="gmbr">
                        <h1>{{$thread->judulThread}}</h1>
                        <p>{{$thread->kategori}}</p>
                        <p>{{$thread->createdTime}}</p>
                        <a href="{{ url('/search=' . $thread->idThread.'+'. $thread->kategori ) }}">
                            <btn class=" btn-search">Read</btn>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @elseif(isset($message))
            <h4 style="color:white;">hasil pencarian ' <i><b>{{$query}}</b></i> '</h4>
            <h3 style="margin:0;">{{$message}}</h3>
            @endif
        </div>
    </div>
</section>
<!--    END OF CONTENT-->
@endsection
