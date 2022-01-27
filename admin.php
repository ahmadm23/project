<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["admin"] !== "1") {
    header("location: ./index.php");
    exit;
}

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'admintodo':
            header("location: ./toDoList.php");
            exit;
        case 'adminuserpage':
            header("location: ./userTable.php");
            exit;
            break;
    }
} else {
    include("./admin.tpl.php");
}
