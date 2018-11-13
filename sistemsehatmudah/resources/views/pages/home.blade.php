    @extends('layouts.baseTemplate')
    @section('content')
    <!--    CONTENT-->
<body>
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
</body>
    <!--    END OF CONTENT-->
    @endsection