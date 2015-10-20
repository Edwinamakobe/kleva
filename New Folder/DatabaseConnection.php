<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Database{
    
    //database variables
    private $_host = "localhost";
    private $_user = "root";
    private $_password = "edwin";
    private $_database = "ecom";
    private $_port =3306;
    private $_socket="";
    
    //other variables
    private $_connection;
    private static $_instance;
    
    //instance of connection
    public static  function getInstance(){
        if(!self::$_instance){
            self::$_instance=new self();
            
        }
        return self::$_instance;       
        
    }
    
    //constructor
    public function __construct() {
        $this->_connection = new mysqli($host, $user, $password, $database, $port, $socket) ;
        if(mysqli_connect_error()){
            trigger_error('There was an error connecting to database' . mysqli_connect_error());
        }
        }
    
    public function __clone() {
        
    }
    public function getConnection(){
        return $this->_connection;
        
    }
}

