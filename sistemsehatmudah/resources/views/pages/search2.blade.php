@extends('layouts/baseTamplate')
@section('content')
    
    <!--    CONTENT-->
    <section>
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/search.css') }}">
        <div class="bg">
            <div class="container" st>
            @if(isset($details))
            @foreach($details as $thread)  
                  <div class="row">
                      <div class="col-lg-8 col-md-12">
                        <h2>{{$thread->judulThread}}</h2>
                        <h5>{{$thread->kategori}}</h5>
                        <h5  style="color: black;">{{$thread->createdTime}}</h5>
                        <img src="{{URL::asset('gambar/'. $thread->idThread .'.jpg')}}" style="height:60vh; width:100%; object-fit: cover">
                        <p class="deskripsi">{{$thread->deskripsiThread}}</p>
                        </div>
                      <div class="col-lg-4 col-md-12">
                          <h5>Thread Terkait</h5>
                          
                      </div>
                    @endforeach
                    @endif
                </div>
            </div>
            </div>
    </section>
    <!--    END OF CONTENT-->
@endsection