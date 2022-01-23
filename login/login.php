<?php
require_once __DIR__."/../config.php";
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../toDo/toDoList.php");
    exit;
}
require_once(SITE_ROOT."/MyFirstClass.php");
$class = new MyFirstClass;
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            if ($class->login($_POST['username'], $_POST['password'])) {
                header("location: ../toDo/toDoList.php");
            } else {
                echo "error";
            }
            break;
    }
} else {
    include("../Test/login/login.tpl.php");
}
