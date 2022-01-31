<?php
session_start();
require_once("./overWatch.php");
require_once("./Validator.php");
$class = new overWatch;
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
                $result = ["success" => 0, "message" => "An error occured"];
                if ($class->isExistingUsername($_POST['username'])) {
                    echo(false);
                } else {
                    if ($class->addNewUser($username, $fname, $lname, $email, $phone,  $password)){
                        header("location: ./index.php");
                        exit;
                    }else{
                        echo(false);
                    }
                }
                break;
        }
    } else {
        echo false;
    }
} else {
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: ./toDoList.php");
        exit;
    }
    include("./signUpform.tpl.php");
}
