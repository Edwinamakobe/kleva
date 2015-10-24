<?php

/*
 * Following code will list all the products
 */

// array for JSON response
$response = array();


// include db connect class
 require_once __DIR__ . '/core/db_connect.php';

// connecting to db
$db = new DB_CONNECT();

// get all products from products table
$result = mysql_query("SELECT * FROM products") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["product"] = array();
    
    while ($row = mysql_fetch_array($result)) {
        // temp products array
        $product = array();
            $product["pid"] = $result["pid"];
            $product["name"] = $result["name"];
            $product["company"] = $result["company"];
            $product["category"] = $result["category"];
            $product["price"] = $result["price"];
            $product["description"] = $result["description"];
            $product["created_at"] = $result["created_at"];
            $product["updated_at"] = $result["updated_at"];
    }
    // success
    $response["success"] = 1;

    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";

    // echo no users JSON
    echo json_encode($response);
}
?>
