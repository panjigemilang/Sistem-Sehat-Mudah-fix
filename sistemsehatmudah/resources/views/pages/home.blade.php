@extends('layouts.baseTamplate')
@section('content')

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
        Sistem Sehat Mudah
    </title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
</head>
<!-- CONTENT-->

<body>

    <!-- SECTION 1 - FORM-->
    <section>
        <div class="main-page">
            <div class="row">
                <div id="join-us" class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="display-1" style="color: white;">Join Us!</h1>
                    <h2 id="description">To get more <span>information</span> and <span> updated notification.</span> You <span> can also ask<br> </span>your favorite <span>doctor</span> about your disease</h2>
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
            <div class="col-lg-12">
                <div class="container">
                    <h1 id="ht">Featured Thread</h1>
                </div>
            </div>
        @if (count($thread) > 0)
        @foreach ($thread as $item)
     <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="thread row container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto">
                    <div class="carousel-item col-md-4 active">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{$item->judulThread}}</h4>
                                <p class="card-text">{{$item->kategori}}</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
         </div>
                    @endforeach
                    @else
                    <p>gagal coy</p>
                    @endif

                    </div>
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
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner row w-100 mx-auto">
                                        <div class="carousel-item col-md-4 active">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card 1</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card 2</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card 3</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card 4</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card 5</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item col-md-4">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card 6</h4>
                                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                </div>
                                                @endsection