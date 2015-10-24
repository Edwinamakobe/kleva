<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aqutech systems, web development, mobile apps, kenyan developers" >    
        <meta name="author" content="Edwin Amakobe">

        <title>{{$title}}</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        {{HTML::style('css/bootstrap.min.css')}}
        

        
        {!! Html::style('css/style.css')!!}
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="w-nav-brand brand-link" href="#home" style="padding:0px 0px 10px 16px;">
                       <!-- <img height="70" style="" src="" alt="Ecom logo Systems">-->
                    </a></div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#services" data-toggle="dropdown" class="dropdown-toggle">Quotes<b class="caret"></b></a>
                           

                        </li>
                        
                        <li>
                            <a href="#projects" data-toggle="dropdown" class="dropdown-toggle">Policies<b class="caret"></b></a>
                            
                        </li>
                        
                        <li>                        
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Claims<b class="caret"></b></a>
                            
                        </li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


        <!-- Header -->
        <a name="home"></a>
        <div class="intro-header">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <h1>ECOM INSURANCE  AGENCY</h1>
                            <h3>Realtime Insurance delivery</h3>
                            <hr class="intro-divider">
                           <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <div class="col-md-6 col-md-offset-2 col-xs-12">
                    <!-- Form -->
                    <form class="bottom-form" action="results.php" method="post">
                        <div class="form-group ">
                            <label>Select type of insurance</label>
                            <select class="form-control" name="type">
                                <option value="personal">Personal Insurance</option>
                                <option value="corporate">Corporate Insurance</option>
                            </select>
                               <label>select category</label>                       
                            <select class="form-control" name="category">
                                <option value="motor">Motor Package Insurance</option>
                                <option value="health">Health Package Insurance</option>
                                <option value="home">Domestic Package Insurance</option>
                                <option value="life">Life Package Insurance</option>
                                <option value="travel">Travel Package Insurance</option>
                                <option value="travel">Travel Package Insurance</option>
                            </select>
                                <label>Enter amount</label>
                                <input type="number" class="form-control" name="percentage" placeholder="enter percentage e.g 4.80 "/>
                                <label></label>
                                <input type="submit" class="form-control btn btn-primary" value="Search Quotes"/>
                            
                        </div>
                    </form>
                    </div>
                    <!-- Form -->
                    <div class="form-process white-text"></div>
                </div>
            </div>
                             
                        </div>
                    </div>
                    
                </div>
                

            </div>
            <!-- /.container -->

        </div>
        
        <!--sign up modal-->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

 </body>
</html>
