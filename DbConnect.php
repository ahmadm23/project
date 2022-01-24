<?php
Class DbConnect{
    function getdbconnect(){
        $servername = "";
        $username = "";
        $password = "";
        $database = "";
        $whitelist = array(
            '127.0.0.1',
            '::1'
        );
        
        if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "first_db";
        }
        
        $mysql = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $mysql;
    }
}
?>