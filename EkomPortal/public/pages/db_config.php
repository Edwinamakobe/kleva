<?php
$database = "ecom";
$server = "localhost";
$user = "root";
$password="edwin";

$con = mysqli_connect($server, $user, $password, $database);
if($con){
    //echo 'connected to database';
}else{
    echo "error connecting";
}
 

?>