<?php
//we may want to change the name of this
require_once('./DbConnect.php');

class Overwatch
{
  private $db;
  private $mysql;

  function __construct()
  {
    $this->db = new DbConnect;
    $this->mysql = $this->db->getdbconnect();
  }
  public function addNewUser($username, $firstName, $lastName, $email, $phone, $password)

  {
    $sql = "INSERT INTO users (username, f_name, l_name, email, phone, password)
            VALUES (:username, :f_name, :l_name, :email, :phone, :password)";
    $query = $this->mysql->prepare($sql);
    $query->bindValue(':username', $username);
    $query->bindValue(':f_name', $firstName);
    $query->bindValue(':l_name', $lastName);
    $query->bindValue(':email', $email);
    $query->bindValue(':phone', $phone);
    $query->bindValue(':password', $password);
    header("location: ./toDoList.php");
    return $query->execute();
  }

  public function getUsers()
  {
    $sql = "select id, username,f_name,l_name,email,phone from users";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public function login($username, $password)
  {
    //check the db if a user exists user the username and pass
    //return true or false
    //if its true go to a new function the SETSUSER
    $sql = "select id, admin from users
            where username=:username and password=:password";
    $result = $this->mysql->prepare($sql);
    $result->bindValue(':username', $username);
    $result->bindValue(':password', $password);
    $result->execute();
    $user_id_admin = $result->fetch(PDO::FETCH_ASSOC);
    if (isset($user_id_admin) && !empty($user_id_admin)) {
      $this->startSessionAndSetUser($username, $user_id_admin);
      return true;
    } else {
      return false;
    }
  }

  public function logout()
  {
    session_start();
    unset($_SESSION);
    session_destroy();
    $_SESSION = array();
    return true;
  }

  public function startSessionAndSetUser($username, $user_id_admin)
  {
    session_start();
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $user_id_admin['id'];
    $_SESSION["admin"] = $user_id_admin['admin'];
    $_SESSION["username"] = $username;
  }

  public function updatestatus($task_id)
  {
    $sql = "UPDATE task SET status = 'Done' WHERE task_id = :task_id";
    $query = $this->mysql->prepare($sql);
    $query->bindValue(':task_id', $task_id);
    return $query->execute();
  }

  public function addtask($task, $id)
  {
    $sql = "INSERT INTO task (task, user_id)
    VALUES (:task, :id)";
    $query = $this->mysql->prepare($sql);
    $query->bindValue(':task', $task);
    $query->bindValue(':id', $id);
    return $query->execute();
  }

  public function deletetask($task_id)
  {
    $sql = "DELETE FROM task WHERE task_id = :task_id";
    $query = $this->mysql->prepare($sql);
    $query->bindValue(':task_id', $task_id);
    return $query->execute();
  }

  public function gettasks($id)
  {
    $sql = "select task_id, task, status from task
    WHERE user_id=:id";
    $result = $this->mysql->prepare($sql);
    $result->bindValue(':id', $id);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getUsersToDoTemplate($id)
  {
    ob_start();
    $tasks = $this->gettasks($id);
    $viewOnly = true;
    include("./_toDoListTable.tpl.php");
    return ob_get_clean();
  }

  public function isExistingUsername($username)
  {
    $sql = "select username from users where username=:username";
    $result = $this->mysql->prepare($sql);
    $result->bindValue(':username', $username);
    $result->execute();
    $existingUsername = $result->fetch(PDO::FETCH_COLUMN);
    return !empty($existingUsername);
  }
}
