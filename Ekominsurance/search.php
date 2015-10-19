<?php

require_once __DIR__ . '/server/core/db_config.php';
$response = array();
$category = 1;
//if (isset($_POST['category'])) {
if($category){
//check string
    // $category = $_POST['category'];  
    $category = "motor";
    stripslashes($category);    
    mysqli_real_escape_string($category);

    //search database
    $query = "select * from products where category = '$category'";
    $result = mysqli_query($query);

    if (mysqli_num_rows($result, $result) > 0) {
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
            $product["validity"] = $result["validity"];
            $product["created_at"] = $result["created_at"];
            $product["updated_at"] = $result["updated_at"];
        }
        $response["product"] = array();
        array_push($response["product"], $product);
        // success
        $response["success"] = 1;

        echo "results found";
    } else {
        echo "Empty fields";
        $response['message'] = "Empty fields";
        $response['success'] = 0;
    }
} else {

    echo "Required fields are missing ";
}
?>