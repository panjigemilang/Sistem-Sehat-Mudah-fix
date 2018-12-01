@extends('layouts.baseTamplate')
@section('content')

<head>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/newThread.css') }}">
</head>
<!--    CONTENT-->

<body>

    <!--    SECTION 1 - FORM-->
<br>
    <section class="container card card-block bg-faded">
        <form action="/bisa" method="POST" enctype="multipart/form-data">

<!--            TITLE-->
            {{ csrf_field() }}
            <!-- <div class="form-group">
                <br>
                <label for="judul">Judul</label>
                <br>
                <input type="text" name="judul" id="title" placeholder="judul" required>
            </div> -->

<!--            KATAGORI-->
            <!-- <div class="form-group">
                <label for="kategori">Kategori</label>
                <br>
                <input type="text" name="kategori" id="title" placeholder="kategori" required>
            </div> -->

<!--            DESC -->
            <!-- <div class="form-group">
                <label for="description">Description</label>
                <br>
                <input type="text" name="deskripsi" id="title" placeholder="Deskripsi" required>
            </div>
             -->
<!--            PICTURE-->
            <div class="form-group" enctype="multipart/form-data">
                <label for="image">Choose File for Image</label>
                <br>
                <input type="file" name="file" required>
            </div>

<!--            SUBMIT-->
            <div class="form-group">
                <button class="btn btn-info btn-lg" >Submit</button>
            </div>
        </form>
    </section>
    <br>

    {{-- END OF SECTION 1 --}}

</body>

<!--    END OF CONTENT-->
@endsection
