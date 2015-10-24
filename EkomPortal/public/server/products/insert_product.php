<?php

    $name = "Britam Insurance";
    $category = "Travel";
    $company = "Britam";
    $price = 4.80;
    $description = "Covers 4.80 percent of the total value of items carried along";
// array for JSON response
  $response = array();

// check for required fields
//if (isset($_POST['name']) && isset($_POST['category']) && isset($_POST['company']) && isset($_POST['price']) && isset($_POST['description'])) {
    if($name){
    /*
   //$pid = $_POST['pid'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $company = $_POST['company'];
    $price = $_POST['price'];
    $description = $_POST['description'];
	*/
    // include db connect class
     require_once __DIR__ . '/core/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();

    // mysql inserting a new row
    $result = mysql_query("INSERT INTO products (name, category, company, price, description)
								 VALUES('$name', '$category',  '$company', '$price', '$description)");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "product successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>