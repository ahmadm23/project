<?php
require_once("../MyFirstClass.php");
$class = new MyFirstClass;
$tasks = $class->gettasks();

if (isset($_POST['action'])) {
    print_r($_POST);
    switch ($_POST['action']) {
        case 'submittask':
            echo $class->addtask($_POST['task']);
            break;
           case 'deletetask':
            echo $class->deletetask($_POST['ahmadstaskid']);
            break;
    }
} else {
    include("toDoList.tpl.php");
}
