<?php
session_start();
require_once("./MyFirstClass.php");
$class = new MyFirstClass;
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            if ($class->login($_POST['username'], $_POST['password'])) {
                header("location: ./toDoList.php");
                exit;
            }
            break;
        case 'logout':
            echo $class->logout();
            break;
    }
} else {
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: ./toDoList.php");
        exit;
    }
    include("./login.tpl.php");
}
