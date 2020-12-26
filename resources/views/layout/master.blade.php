<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Criminal Records</title>
        <link rel="shortcut icon" href="icon/badge.ico" /> <!--menambah icon-->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <script src="{{ asset('js/jquery.js') }}"> </script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"> </script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Quantico', sans-serif;/*'Nunito', sans-serif;*/
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

        

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }   

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                padding: 50px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .pagination > li > a,
            .pagination > li > span {
                color: gray; // use your own color here
            }

            .pagination > .active > a,
            .pagination > .active > a:focus,
            .pagination > .active > a:hover,
            .pagination > .active > span,
            .pagination > .active > span:focus,
            .pagination > .active > span:hover {
                background-color: gray;
                border-color: gray;
            }
            .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: gray; 
                border-color: gray; 
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref bg-dark">

            <div class="content text-light bg-dark" >
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/criminal_records">Criminal Records</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/help">Help</a>
                            </li>
                            <li class="nav-item">
                            @if (Auth::check() && Auth::user()->level == 'admin')
                            <a class="nav-link" href="/criminal">Database</a>
                            @endif
                            </li>
                            
                        </ul>
                        @if (Route::has('login'))
                        <ul class="navbar-nav ml-auto">
                            @auth
                                <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                                </li>
                            @else
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login
                                    <span class="sr-only">(current)</span>
                                </a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                            
                            
                            
                            
                        </ul>
                        @endif
                        
                        

                        
                        <!-- <form class="form-inline">
                            <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </form> -->
                        </div>
                    </div>
                </nav>
                @yield('content')
                @include('layout.menu')
        
                
            </div>  
            
            <script src="{{ asset('js/main.js') }}"></script> 
            <script type="text/javascript">
                $('.date').datepicker({
                    format:'yyyy/mm/dd',
                    autoclose:'true'
                });
            </script>
        </div>
        
            
    </body>
</html>