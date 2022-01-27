<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ./index.php");
    exit;
}
require_once("./MyFirstClass.php");

$class = new MyFirstClass;
$users = $class->getusers();
$tasks = $class->gettasks($_SESSION['id']);
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'getusers00':
            $tasks = $class->gettasks($_POST['usersid00']);
            echo $tasks;
            break;
    }
} else {

    include("./userTable.tpl.php");
}
