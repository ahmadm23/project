<?php
require_once("./MyFirstClass.php");
$class = new MyFirstClass;
$tasks = $class->gettasks();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        
        case 'submittask':
            echo $class->addtask($_POST['task']);
            break;
           case 'deletetask':
            echo $class->deletetask($_POST['ahmadstaskid']);
            break;
            case 'updatestatus':
                echo $class->updatestatus($_POST['updatetaskid']);
                break;
                case 'logout':
                    echo $class->logout();
                    break;
    }
} else {
    include("./toDoList.tpl.php");
}
