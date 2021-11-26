<?php
require_once("./MyFirstClass.php");
$class =new MyFirstClass;
$users = $class->getUsers();
print_r($users);
$firstName = $_GET["fname"];
$lastName = $_GET["lname"];
$email = $_GET["email"];
$phoneNum = $_GET["tel"];


include('./view.tpl.php');
