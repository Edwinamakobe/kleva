<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecom Insurance</title>

        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/landing-page.css') }}">
        
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
                                <img src="{{asset('img/new')}}" alt="Ecom logo" />
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav"> 
                                <li><a href="{{url('contact-us')}}">Home</a></li>
                                <li><a href="{{action('FrontController@getAboutUs')}}">Quotes</a></li>  
                                <li><a href="{{action('FrontController@getTerms')}}">Policies</a></li>
                                <li><a href="{{action('FrontController@getTerms')}}">Claims</a></li>
                                <li><a href="{{url('contact-us')}}">Contact us</a></li>
                                <li><a href="{{url('about-us')}}">About Us</a></li>  
                                <li><a href="{{url('terms')}}">Terms</a></li>                             

                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="content">              
              
            </div>
            <!--
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            -->
            <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            
        </div>   
    </body>
</html>