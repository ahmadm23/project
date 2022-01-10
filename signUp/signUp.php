<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}

require_once("../MyFirstClass.php");
$class = new MyFirstClass;
$users = $class->getUsers();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'submitUser':
            echo $class->addNewUser($_POST['user'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['tel']);
            break;
    }
} else {
    include("../view.tpl.php");
}
?>