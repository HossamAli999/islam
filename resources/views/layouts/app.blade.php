{{--
            @guest
                            @if (Route::has('login'))
                            <a  class="btn btn-outline-primary me-2"  href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            @endguest
--}}
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ISLAM </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        {{-- <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet"> --}}
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
        {{-- <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> --}}
    </head>

    <body class="homepage">
        <header id="header">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
                <div class="container">
                    <a class="navbar-brand" href="{{route('start')}}"><img src="images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample07">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('listen')}}">Listen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('reference')}}">Reference</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('quran-pdf')}}">Quran PDF</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        <form role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>

        </header>
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <div class="container ">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ">
                <p class="col-md-4 mb-0 text-muted">&copy; Islam ,All Rights Reserved.</p>

                {{-- <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              </a> --}}
                <div class="col-sm-3">
                    <form action="{{route('newsletter')}}" method="POST" class="row g-3">
                        @csrf
                        <div class="input-group mx-auto">
                            <!-- declaration for first field -->
                            <input id="newsletter1" type="text" name="email" class="form-control form-control "
                                placeholder="Email address">
                            <!-- reducong the gap between them to zero -->
                            <span class="input-group-btn" style="width:0px;"></span>

                            <!-- declaration for second field -->
                            <input class="btn btn-primary form-control" type="submit" value="Subscribe">
                        </div>
                        @if ($message= session('error_subscribed'))
                        @foreach($message as $messages)
                        <p class="alert alert-danger" role="alert">{{$messages}}</p>
                        @endforeach
                        @endif
                        {{-- @if (session('error_subscribed'))
                    <p class="alert alert-danger" role="alert">{{ session('error_subscribed') }}</p>
                        @endif --}}
                        @if (session('success_subscribed'))
                        <p class="alert alert-success" role="alert">{{ session('success_subscribed') }}</p>
                        @endif
                    </form>
                </div>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="{{route('listen')}}" class="nav-link px-2 text-muted">listen</a></li>
                    <li class="nav-item"><a href="{{route('reference')}}" class="nav-link px-2 text-muted">reference</a></li>
                    <li class="nav-item"><a href="{{route('quran-pdf')}}" class="nav-link px-2 text-muted">Quran PDF</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link px-2 text-muted">contact us</a></li>
                </ul>
            </footer>
        </div>
        {{-- <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

    </body>

    </html>
