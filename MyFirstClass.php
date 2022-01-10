<?php
require_once('../DbConnect.php');
class MyFirstClass
{
  private $db;
  private $mysql;

  function __construct()
  {
    $this->db = new DbConnect;
    $this->mysql = $this->db->getdbconnect();
  }


  public function addNewUser($username, $fistName, $lastName, $email, $tel)
  {
    $sql = "INSERT INTO users (username, f_name, l_name, email, phone)
            VALUES (:username, :f_name, :l_name, :email, :phone)";
    $query = $this->mysql->prepare($sql);
    $query->bindValue(':username', $username);
    $query->bindValue(':f_name', $fistName);
    $query->bindValue(':l_name', $lastName);
    $query->bindValue(':email', $email);
    $query->bindValue(':phone', $tel);
    return $query->execute();
  }

  public function getUsers()
  {
    $sql = "select username,f_name,l_name,email,phone from users";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public function login($username, $password)
  {
    //check the db if a user exists user the username and pass
    //return true or false
    //if its true go to a new function the SETSUSER
    $sql = "select id from users
            where username=:username and password=:password";
    $result = $this->mysql->prepare($sql);
    $result->bindValue(':username', $username);
    $result->bindValue(':password', $password);
    $result->execute();
    $id = $result->fetch(PDO::FETCH_COLUMN);
    
    if(isset($id) &&  !empty($id)){
      $this->startSessionAndSetUser($username,$id);
      return true;
    }else{
      return false;
    }

  }

  public function startSessionAndSetUser($username, $id){
    session_start();
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["id"] = $id;
    $_SESSION["username"] = $username;
  }
}
