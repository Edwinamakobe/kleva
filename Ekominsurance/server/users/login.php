<?php
require 'core.inc.php';
// array for JSON response
$response = array();


// include db connect class
require_once __DIR__ . '/core/db_connect.php';

// connecting to db
$db = new DB_CONNECT();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysql_escape_string($email);
    mysql_escape_string($password);
    md5($password);

  //getting user 
     $result = mysql_query("SELECT * FROM users WHERE email= '$email' and password='$password'");

    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {

            $result = mysql_fetch_array($result);
            $user = array();
            $user["uid"] = $result["uid"];
            $user["name"] = $result["name"];
            $user["email"] = $result["email"];
            $user["phone"] = $result["phone"];
            $user["created_at"] = $result["created_at"];
            $user["updated_at"] = $result["updated_at"];
            // success
            $response["success"] = 1;

            // user node
            $response["user"] = array();

            array_push($response["user"], $product);

            // echoing JSON response
            echo json_encode($response);
        } else {
            // no product found
            $response["success"] = 0;
            $response["message"] ="user not found";

            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "user not found";

        // echo no users JSON
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
