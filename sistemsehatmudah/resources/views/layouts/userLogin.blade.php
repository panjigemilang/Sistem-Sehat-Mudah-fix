<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
        Sistem Sehat Mudah
    </title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
</head>
<body>
    <!--    NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light row" style="margin: 2vh">
        <div class="col">
            <a href="/home"> <img class="img-fluid" src="{{ URL::asset('gambar/LogoSSMFix.png') }}" width="100vh">
                <span>Sistem Sehat Mudah</span>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 col" method="get" action="search">
                <input type="hidden" name="compare" value="compare">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" size="44vh" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="/newThread">New Thread</a>
                        </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--    END OF NAVBAR-->
    
   @yield('content')

   <!--    FOOTER-->
    
<footer>
        <div class="row">
            <div class="item3 col outer">
                <div class="gambar">
                    <div class="logo">Sistem Sehat Mudah</div>
                </div>
            </div>
        </div>
    </footer>
    <!--    END OF FOOTER-->
    <script src="{{ URL::asset('js/jquery3-3-1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>