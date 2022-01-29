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
        $password = "";
        $database = "first_db";
        }
        else{
            $servername = "i0rgccmrx3at3wv3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
            $username = "aq5k2pr2kjvvcmez";
            $password = "lrxno2oaxrdy8o0n";
            $database = "glhrxi30zvpf1iqs";
        }
        
        $mysql = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $mysql;
    }
}
