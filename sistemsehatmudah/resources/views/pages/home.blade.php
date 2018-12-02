@extends('layouts.baseTamplate')
@section('content')

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <title>
        Sistem Sehat Mudah
    </title>
</head>

<!-- CONTENT-->
<body>
    <!-- SECTION 1 - FORM-->
    <section>
        <div class="main-page">
            <div class="row">
                <div id="join-us" class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="display-1" style="color: white;">Join Us!</h1>
                    <h2 id="description">To get more <span>information</span> and <span> updated notification.</span> You <span> can also ask </span>your favorite <span>doctor</span> about your disease</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-cover">
                        <form id="form-register">
                            <div class="form-group">
                                <label class="label-form">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First name">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg">Subscribe!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END OF SECTION 1 --}}

    {{-- SECTION 2 --}}
    <section id="sec2">
        <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
        <h1 id="ht" style="margin: 0 10rem;">Featured Thread</h1>
            <div class="thread_box row">                   
                    @foreach ($fthread as $fthread)
                <div class="col-lg-8 col-md-12 col-sm-12 featured-img" style="
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ URL::asset('gambar/'.$fthread->idThread.'.jpg')}});">
                  <h1 class="featured-text">{{$fthread->judulThread}}</h1>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="cat">
                    <h3 class="featured-text" id="desc">{{$fthread->deskripsiThread}}</h3><a href="{{url('/search='.$fthread->idThread.'+'.$fthread->kategori)}}">Read More</a>
                    <form method="get" action="search">                        
                    <small class="featured-text"><input type="submit" name="keyword" value="{{$fthread->kategori}}" class="submit-cat"></small>
                    </form>
                    @endforeach
                    </div>
                </div>
            </div>
         </div>
                </div>

                {{-- BMI --}}
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <h1 id="ht" style="text-align: center;">Hitung BMI</h1>
                            <div id="bmi">
                                <form id="form-bmi">
                                    <div class="form-group">
                                        <label class="label-form">Berat</label>
                                        <br>
                                        <input type="text" class="control-bmi" placeholder="kg">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form">Tinggi</label>
                                        <input type="text" class="control-bmi" placeholder="cm">
                                    </div>
                                    <!-- SPACE -->
                                    <br>
                                    <div style="border: 1px solid #ead2d2; width: 70%; margin: 0 auto;"></div>
                                    <br>
                                    <!-- SPACE -->
                                    <div class="form-group htg">
                                        <button type="button" class="btn btn-success btn-lg">Hitung</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <h1 id="ht">New Thread</h1>

                            <!-- CARD CAROUSEL -->
                            <div class="thread row container-fluid">
                                    @if (count($thread) > 0)
                                    <div class="owl-carousel owl-theme">
                                        @foreach ($thread as $item)
                                        <div class="item">
                                            <div class="card">
                                                <img class="card-img-top" src="{{ URL::asset('gambar/'.$item->idThread.'.jpg') }}" alt="Card image cap" width= "100px" height="100px" style="object-fit: cover; border-radius: inherit;">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{$item->judulThread}}</h4>
                                                    <p class="card-text" id="desc">{{$item->deskripsiThread}}</p><a href="{{url('/search='.$item->idThread.'+'.$item->kategori)}}">Read More</a>
                                                    <form method="get" action="search">                                                            
                                                <p class="card-text" style="text-align: right;"><small class="text-muted"><input type="submit" name="keyword" value="{{$item->kategori}}" class="submit-cat"></small></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                        @endif                          
                            </div>
                        </div>
                    </div>
    </section>
    <script src="{{ URL::asset('js/jquery3-3-1.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('js/collapser.min.js') }}"></script>
    <script src="{{ URL::asset('js/readMore.js') }}"></script>
</body>
                    @endsection