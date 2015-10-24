<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ECOM INSURANCE</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/main.css" rel="stylesheet">
        <link href="../dist/css/custom.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">ECOM LOGO </a>
                    
                </div>
                <!-- /.navbar-header -->

                
                <!-- /.navbar-top-links -->
                 <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Home
                        </a>                        
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>name</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           Quotes
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>name</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           Premiums
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>name</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           Claims
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>name</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           Sign up 
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>name</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <button class="btn-primary form-control"> Log in </button>
                        </a>
                        
                    </li>
                </ul>             
                
            </nav>

            
            <!--section -->
             <?php
            include ('db_config.php');
            $response = array();
            //$category = "motor";
            //$type = "personal";
            //$amount = 4.80;
            if (isset($_GET['id'])) {
            //if($category){
            //check string
            //posting the categories
                //$type = $_POST['type'];
                $category = "Motor";
                //$percentage = $_POST['percentage'];
                ///$make=$_POST['make'];
                //$model=$_POST['model'];
                $amount=$_POST['amount'];
                //$date=$_POST['date'];
                //stripslashes($category);    
                //mysqli_real_escape_string($category);
                //search database
                $query = "select * from products where pid='$pid'";
                $result = mysqli_query($con, $query);

                //check if query excecuted
                if ($result) {

                    if ($result->num_rows > 0) { 
                        echo "<div class=\"row\"><div class=\"btn btn-success col-lg-12\"><p>Total Results Found</p></div></div>";

                        while ($row = $result->fetch_object()) {
                            
                    echo "<div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"panel-heading\"><h4>Company</h4></div>
                        <img src=\"uploads/files\/uploads\/abra\/0Capture.png\"\/>
                        <p><h4>$row->company</h4></p>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"panel-heading\"><h4>Insurance Details</h4></div>
                        <div class=\"panel-body\">
                        <table class=\"table-responsive\" border=\"2\" cellpadding=\"5\">
                            <tr>
                            <th>Cover</th>
                            <th>Windscreen</th>
                            <th>Towing</th>
                            <th>Premium</th>
                            </tr>
                            <tr>
                                <td>$row->type</td>
                                <td>Khs. $row->windscreen</td>
                                <td>Khs. $row->towing</td>
                                <td>Khs. (($row->percentage)/(100)*$amount))</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"panel-heading\"><h4>Extra Benefits</h4></div>
                        <div class=\"panel-body\">
                            <p>$row->description</p>
                            <a href=\"details.php?pid='$row->pid'\"><button class=\"btn-primary\" type=\"submit\"/>View Details</button></a>
                            <a href=\"details.php?pid='$row->pid'\"><button class=\"btn-primary\" type=\"submit\"/>Buy Quote</button></a>
                        </div>
                    </div>
                    <div class=\"panel-footer\"></div>           
                </div>";
                            
                            
                        }
                    } else {
                        echo "<div class=\"row\"><div class=\"btn btn-warning col-lg-12\"><p>Total Results Found</p></div></div>";
                        echo "There are no results for your search go back and search using different figures";
                    }
                } else {
                    echo "<div class=\"row\"><div class=\"btn btn-danger col-lg-12\"><p>Total Results Found</p></div></div>";
                    echo "<div class=\"panel-danger\"> <h3>there was a problem searching quotes<h3></div>";
                }
            } else {

                echo "<div class=\"panel-danger\"> <h3>Please fill all fields<h3></div>";
            }
            ?>

                
            <!--end section -->

        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../bower_components/raphael/raphael-min.js"></script>
        <script src="../bower_components/morrisjs/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>

</html>
