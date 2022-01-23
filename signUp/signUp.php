<?php
require_once __DIR__."/../config.php";
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: ../toDo/toDoList.php");
//     exit;
// }

require_once(SITE_ROOT."/MyFirstClass.php");
$class = new MyFirstClass;
$users = $class->getUsers();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'submitUser':
            echo $class->addNewUser($_POST['username'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone']);
            break;
    }
} else {
    include(SITE_ROOT."/signUp/signUpform.tpl.php");
}
?>