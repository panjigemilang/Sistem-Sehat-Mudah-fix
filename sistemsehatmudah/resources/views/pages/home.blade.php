@extends('layouts.baseTemplate')
@section('content')
<!--    CONTENT-->

<body>

    <!--    SECTION 1 - FORM-->
    <section>
        <div class="main-page">
            <div class="row">
                <div id="join-us" class="col-lg-6">
                    <h1 class="display-1" style="color: white;">Join Us!</h1>
                    <h2 id="description">To get more <span>information</span> and <span> updated notification.</span> You <span> can also ask </span>your favorite <span>doctor</span> about your disease</h2>
                </div>

                <div class="col-lg-6">
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
                <div class="container-fluid">
                    <h1 id="ht">Hot Thread</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @if (count($thread) > 0)
                @foreach ($thread as $item)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="container-fluid">
                <h1>{{$thread->namaDokter}}</h1>
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="container-fluid">
                <h1>{{$thread->username}}</h1>
                <h2>{{$thread->password}}</h2>
                </div>
            </div>
                @endforeach
            @else
                <p>gagal coy</p>
            @endif   
        </div>
    </section>
</body>
{{-- END OF SECTION 2 --}}

<!--    END OF CONTENT-->
@endsection
