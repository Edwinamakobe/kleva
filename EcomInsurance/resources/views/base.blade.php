<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')-MarkFlair</title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
        @yield('extra-css')
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="page-wrapper home">
            <header>
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{action('FrontController@getIndex')}}">
                                <img src="{{asset('img/new-logo.jpg')}}" alt="markflair logo" />
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav"> 
                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                <li><a href="{{action('FrontController@getAboutUs')}}">About Us</a></li>  
                                <li><a href="{{action('FrontController@getTerms')}}">Terms</a></li>
                                @if(Auth::check())                                
                                <li><a href="{{action('BackController@getIndex')}}">Dashboard</a></li>
                                <li><a class="login btn btn-primary" href="{{action('UserController@getLogout')}}">Log out</a></li>
                                @else
                                <li><a href="{{action('UserController@getRegister')}}">Create Account</a></li>
                                <li><a class="login btn btn-primary" href="{{action('UserController@getLogin')}}">Log in</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="content">              
                @yield('content')
            </div>
            <!--
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            -->
            <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            
            @yield('extra-js')
    </body>
</html>