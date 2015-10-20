<?php 
class ProductHelper {
    $name;
    $type;
    $company;
    $category;
    $description;
    $percentage;
    $validity;
    $updated_at;
    
    function __construct() {
    $this->connect()
            
    }

$conn = mysqli_connect('localhost', 'root', 'edwin', '$database', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.
mysqli_close($conn); 
    
}

