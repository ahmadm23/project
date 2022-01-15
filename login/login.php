<?php
require_once("../MyFirstClass.php");
require_once("../Validator.php");
$class = new MyFirstClass;
$validator = new Validator;
$username = "";
$password = "";
if (isset($_POST['action'])) {
    if ($validator->isValidUsername($_POST['username'])) {
        $username = $_POST['username'];
    }
    if ($validator->isValidpassword($_POST['password'])) {
        $password = $_POST['password'];
    }
    switch ($_POST['action']) {
        case 'login':
            if ($class->login($username, $password)) {
                include("./toDo/toDoList.php");
            } else {
                echo "error";
            }
            break;
    }
}
