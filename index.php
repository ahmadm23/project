<?php
require_once("./MyFirstClass.php");
$class = new MyFirstClass;
$users = $class->getUsers();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'submitUser':
            $success = $class->addNewUser($_POST['user'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['tel']);
            echo $success;
            break;
    }
} else {
    include("./view.tpl.php");
}
