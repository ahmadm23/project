<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}

require_once("../MyFirstClass.php");
require_once("../Validator.php");
$class = new MyFirstClass;
$validator = new Validator;
$username = "";
// $password = "";
$users = $class->getUsers();
if (isset($_POST['action'])) {
    if ($validator->isValidUsername($_POST['username'])) {
        $username = $_POST['username'];
    }
    // //if ($validator->isValidpassword($_POST['password'])) {
    //     $password = $_POST['password'];
    // }
    switch ($_POST['action']) {
        case 'submitUser':
            echo $class->addNewUser($username, $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['tel']);
            break;
    }
} else {
    include("../view.tpl.php");
}
?>