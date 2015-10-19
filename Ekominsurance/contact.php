<?php
 if($_POST) {
     
    //variables
    $name = "Edwin";//trim($_POST['name']);
    $email = "billingtonamunga@gmail.com"; //trim($_POST['email']);
    $msg = "This is awesome";//trim($_POST['message']);
    $subject = "AcuTech new Message";
    
    //email address settings
    $my_address = "edwinamakobe10@gmail.com";
    $headers = "From: root@localhost.com ";
    $message = "Contact name: $name\nContact Email: $email\nContact Message: $msg";
    $to = $my_address;
    if ( $name == "")
    {
        echo 'Name field is required';
        $result = "Name field is required"; 
    }
    else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email))
    {
        echo 'Enter a valid email address';
        $result = "Enter a valid email address"; 
    }
     else if( strlen($subject) == "")
    {
        echo 'Please Write Subject';
        $result = "Please Write Subject"; 
        }
        else if ( strlen($msg) < 10 )
    {
        echo 'Write more than 10 characters';
        $result = "Write more than 10 characters"; 
    }
    else
    {
        mail($to, $subject, $message, $headers);
        echo "Your mail has been sent succesfully!";
        //store details on database
        $con = mysql_connect("localhost", "root", "edwin") or die('error occured');
        if($con){
            $query = mysql_query("insert into acutechsystems(name, email, message)values($name, $email, $message)");
            if($query){
                echo "Message successfuly saved to our database";
            } else{
                echo " Error saving message ";
            }
        }else{
            echo "Error in connection";
        }
    }
}else{
    echo 'required fields are missing';
}
?>