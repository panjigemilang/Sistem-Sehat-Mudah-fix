@extends('layouts/baseTamplate')
@section('content')

<!--    CONTENT-->
<section>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/search.css') }}">
    <div class="bg">
        <div class="container" st>
            @if(isset($thread))
            @foreach($thread as $thread)
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h2>{{$thread->judulThread}}</h2>
                    <h5>{{$thread->kategori}}</h5>
                    <h5 style="color: black;">{{$thread->createdTime}}</h5>
                    <img src="{{URL::asset('gambar/'. $thread->idThread .'.jpg')}}" style="height:60vh; width:100%; object-fit: cover">
                    <p class="deskripsi">{{$thread->deskripsiThread}}</p>
                </div>
                @endforeach
                @endif
                <div class="col-lg-4 col-md-12">
                    <h5>Thread Terkait</h5>
                    @if(isset($terkait))
                    @foreach($terkait as $terkait)
                    <hr>
                    <img src="{{ URL::asset('gambar/'. $terkait->idThread .'.jpg' )}}" width="80px" id="gmbr">
                    <h5>{{$terkait->judulThread}}</h5>
                    <h7>{{$terkait->createdTime}}</h7>
                    <a href="{{ url('/search=' . $terkait->idThread.'+'. $thread->kategori ) }}">
                    <button type="button" class="btn">read</button>
                    </a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--    END OF CONTENT-->
@endsection