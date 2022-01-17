<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ../index.php");
    exit;
}

require_once("../MyFirstClass.php");
require_once("../Validator.php");
$class = new MyFirstClass;
$validator = new Validator;
$users = $class->getUsers();
if (isset($_POST['action'])) {
    if ($validator->areRequiredFieldsSet($_POST)) {
        if ($validator->isValidUsername($_POST['username'])) {
            $username = $_POST['username'];
        }
        if ($validator->isValidfname($_POST['fname'])) {
            $fname = $_POST['fname'];
        }
        if ($validator->isValidlname($_POST['lname'])) {
            $lname = $_POST['lname'];
        }
        if ($validator->isValidpassword($_POST['password'])) {
            $password = $_POST['password'];
        }
        if ($validator->isValidphone($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        if ($validator->isValidemail($_POST['email'])) {
            $email = $_POST['email'];
        }
        switch ($_POST['action']) {
            case 'submitUser':
                echo $class->addNewUser($username, $fname, $lname, $email, $phone, $password);
                break;
        }
    }else{
        echo false;
    }
} else {
    include("../view.tpl.php");
}
