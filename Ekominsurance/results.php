<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aqutech systems, web development, mobile apps, kenyan developers" >    
        <meta name="author" content="Edwin Amakobe">

        <title>Ecom</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="img/">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">

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
                        <img height="70" style="" src="" alt="Ecom agency logo"></a></div>
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
        <div class="container-fluid">
            <?php
            include ('db_config.php');
            $response = array();
            //$category = "motor";
            //$type = "personal";
            //$amount = 4.80;
            if (isset($_POST['type']) && isset($_POST['category']) && isset($_POST['percentage'])) {
            //if($category){
            //check string
            //posting the categories
                $type = $_POST['type'];
                $category = $_POST['category'];
                $percentage = $_POST['percentage'];

                //stripslashes($category);    
                //mysqli_real_escape_string($category);
                //search database
                $query = "select * from products where type='$type' and category = '$category' and percentage<'$percentage'";
                $result = mysqli_query($con, $query);

                //check if query excecuted
                if ($result = mysqli_query($con, $query)) {

                    if ($result->num_rows > 0) {
                      echo   "<div class=\"panel-green\">
                         <div class=\"panel-heading\">
                         <h4>Records That Matched your search</h4>
                         <div class=\"panel-body\">";

                        while ($row = $result->fetch_object()) {
                            echo "<br><div class=\"col-md-4 col-md-offset-2\"> Name: " . $row->name . "<br>".
                            "Type: " . $row->type . "<br>".
                            "Category: " . $row->category . "<br>".
                            "Company: " . $row->company . "<br>".
                            "Percentage: " . $row->percentage . "% of current value <br>".
                            "Description: " . $row->description . "<br>".
                            "Validity: " . $row->validity . "Years". "<br>".
                            "Last Edited: " . $row->updated_at .                            " <hr>
                  <button class=\"btn btn-primary form-control \">Buy Quote</button>
                  <div class=\"panel-footer\"></div>
            </div>
            </div>";
                        }
                    } else {
                        echo "There are no results for your search";
                    }
                } else {
                    echo "there was a problem searching quotes";
                }
            } else {

                echo "Required fields are missing ";
            }
            ?>
        </div>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
