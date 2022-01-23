<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ./toDo/toDoList.php");
    exit;
}
require_once("./MyFirstClass.php");

$class = new MyFirstClass;
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            if ($class->login($_POST['username'], $_POST['password'])) {


                header("location: ./toDo/toDoList.php");


            } else {
                echo "error";
            }
            break;
            case 'logout':
                echo $class->logout();
                break;
    }
} else {
    include("./login/login.tpl.php");


}
