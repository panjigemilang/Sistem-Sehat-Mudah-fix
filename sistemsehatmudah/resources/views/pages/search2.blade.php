@extends('layouts/baseTamplate')
@section('content')

<!--    CONTENT-->
<section>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/search.css') }}">
    <div class="bg">
        <div class="container">
            @if(isset($thread))
            @foreach($thread as $thread)
            <div class="row">
                <div class="col-lg-4 col-md-12" >
                    <a href="{{ url('/profile=' . $thread->kategori ) }}" style="text-decoration: none;">
                <img src="{{URL::asset('gambar/'.$thread->kategori.'.jpg')}}" style="object-fit: cover; float: left; margin: 0 12px 15px;" class="rounded-circle" height="80px" width="80px">
                    </a>
                    <h2 style="font-weight: bolder;">{{$thread->judulThread}}</h2>
                    <h5>{{$thread->kategori}}</h5>
                    <h5 style="color: black;">{{$thread->createdTime}}</h5>
                </div>
                        <div class="col-lg-4 col-md-4" style="border-right: 1px solid rgb(211, 202, 202);">

                            <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                                                          
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal">
                                    Delete Thread
                                  </a>                                  
                                </div>
                              </div>                        

                              <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Delete Thread</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                          Are you sure want to delete this thread?
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                                <form method="GET" action="{{url('/destroy='. $thread->idThread)}}" style="margin: 0;">
                                                    <input type="submit" value="Yes" class="btn btn-success"/>
                                                </form>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                </div>

                <div class="col-lg-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 thumb" >
                    <img src="{{URL::asset('gambar/'. $thread->idThread .'.jpg')}}" style="height:60vh; width:100%; object-fit: cover">
                    <p class="deskripsi">{{$thread->deskripsiThread}}</p>
                </div>
                @endforeach
                @endif
                <div class="col-lg-4 col-md-12">
                    <h4 style="font-weight: bolder;">Thread Terkait</h4>
                    <div class="row">
                    @if(isset($terkait))
                    @foreach($terkait as $terkait)                    
                    <div class="col-lg-12 col-md-3 col-sm-6" style="text-align: center;">
                            <hr>
                    <img src="{{ URL::asset('gambar/'. $terkait->idThread .'.jpg' )}}" width="160px" id="gmbr">
                    <h4 style="font-weight: bolder;">{{$terkait->judulThread}}</h4>
                    <h5>{{$terkait->createdTime}}</h5>
                    <a href="{{ url('/search=' . $terkait->idThread.'+'. $thread->kategori ) }}">
                    <button type="button" class="btn">read</button>
                    </a>
                    </div>
                    @endforeach
                    @endif
                    </div>
                </div>
            </div>
            </div>
            </div>
</section>
<!--    END OF CONTENT-->
@endsection
