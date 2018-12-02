@extends('layouts.baseTemplate')
@section('content')

<head>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/profile.css')}}">
</head>
<!--    CONTENT-->

<body>

    <section>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="biru">
                    @foreach($profile as $profile)
                <img src="{{URL::asset('gambar/'.$profile->kategori.'.jpg')}}" class="img-fluid" id="pp">
                    <br>
                    <h1 class="sm-txt" id="name">{{$profile->namaDokter}}</h1>
                    <h2 class="sm-txt" id="name">About Me</h2>
                    <h1 style="color: white; font-weight: bolder" class="sm-txt">Posts : {{count($profile->idDokter)}}</h1>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        
<!--        BTN POSTS-->
        <div class="btn-wrapper">
        <button class="btn btn-default btn-success" id="posts">See Posts</button>
            </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="putih">
                    
                </div>
            </div>
        </div>
    </section>

</body>
{{-- END OF SECTION 2 --}}

<!--    END OF CONTENT-->
@endsection