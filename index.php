<?php
session_start();

require_once("./MyFirstClass.php");

$class = new MyFirstClass;
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            if ($class->login($_POST['username'], $_POST['password'])) {
                header("location: ./toDo/toDoList.php");
            }

            break;
        case 'logout':
            $class->logout();
            header("location: index.php");
            break;
            case 'logout':
                echo $class->logout();
                break;
    }
} else {
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: ./toDo/toDoList.php");
        exit;
    }
    include("./login/login.tpl.php");


}
