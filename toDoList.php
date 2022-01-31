<?php
session_start();

require_once("./overWatch.php");

$class = new overWatch;
$tasks = $class->gettasks($_SESSION['id']);
$viewOnly = false;
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'submittask':
            $class->addtask($_POST['task'], $_SESSION['id']);
            break;
        case 'deletetask':
            $class->deletetask($_POST['ahmadstaskid']);
            break;
        case 'updatestatus':
            $class->updatestatus($_POST['updatetaskid']);
            break;
    }
} else {
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: ./index.php");
        exit;
    }
    include("./toDoList.tpl.php");
}
