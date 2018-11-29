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
        <form action="/newThread" method="POST">
            
<!--            TITLE-->
            <div class="form-group">
                <br>
                <label for="title">Title</label>
                <br>
                <input type="text" id="title" placeholder="Title" name="title" required>
            </div>
            
<!--            DESC-->
            <div class="form-group">
                <label for="description">Description</label>
                <br>
                <input type="hidden" name="description">
                <textarea rows="4" cols="100" name="comment" form="userform" required ></textarea>
            </div>
            
<!--            PICTURE-->
            <div class="form-group">
                <label for="image">Choose File for Image</label>
                <br>
                <input type="file" id="file" name="file" required>
            </div>
            
<!--            SUBMIT-->
            <div class="form-group">
                <button class="btn btn-info btn-lg">Submit</button>
            </div>
        </form>
    </section>
    <br>

    {{-- END OF SECTION 1 --}}

</body>

<!--    END OF CONTENT-->
@endsection
