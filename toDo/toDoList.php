<?php
session_start();

require_once($_SERVER['HTTP_REFERER']."project/MyFirstClass.php");

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ".$_SERVER['DOCUMENT_ROOT']."/project/index.php");
    exit;
}

$class = new MyFirstClass;
$tasks = $class->gettasks();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'submittask':
            $class->addtask($_POST['task']);
            break;
        case 'deletetask':
            $class->deletetask($_POST['ahmadstaskid']);
            break;
        case 'updatestatus':
            $class->updatestatus($_POST['updatetaskid']);
            break;
        case 'updatestatus':
            echo $class->updatestatus($_POST['updatetaskid']);
            break;
    }
} else {
    include("toDoList.tpl.php");
}
