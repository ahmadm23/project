<?php
require_once("./MyFirstClass.php");
$class =new MyFirstClass;
$users = $class->getUsers2();
$firstName = $_GET["fname"];
$lastName = $_GET["lname"];
$email = $_GET["email"];
$phoneNum = $_GET["tel"];
$info = array($firstName, $lastName, $email, $phoneNum);

include('./view.tpl.php');
