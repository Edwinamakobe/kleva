<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbUtil
 *
 * @author Fidelia
 */
class DbUtil {
    function __construct() {
    $this->connect();            
    }

    function getConnection(){
       $conn = mysqli_connect('localhost', 'root', 'edwin', '$database', '3306');
       if (!$conn) {
       die('Could not connect to MySQL: ' . mysqli_connect_error());
       return $conn;
       }
    
}
    function closeConnection(){    
        mysqli_close($conn); 
        }

}
