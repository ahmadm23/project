<?php
require_once("../MyFirstClass.php");
$class = new MyFirstClass;
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'login':
            if($class->login($_POST['username'], $_POST['password'])){
                include("./toDo/toDoList.php");
            }else{
                echo "error";
            }
            break;
    }
} 
