<?php
class DatabaseHelper {
   
    protected function login(){
    $db = DatabaseConnection::getInstance();
    $mysqli = $db->getConnection();   
    }
    //put your code here
}
