<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ./index.php");
    exit;
}
require_once("./overWatch.php");

$class = new overWatch;
$users = $class->getusers();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'getUsersTask':
            $modalHtml = $class->getUsersToDoTemplate($_POST["usersId"]);
            echo json_encode(["success"=>1,"html"=>$modalHtml]);
            break;
    }
} else {
    include("./userTable.tpl.php");
}
