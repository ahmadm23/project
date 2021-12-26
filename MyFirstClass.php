<?php
require_once('./DbConnect.php');
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
    $query ->bindValue(':username', $username);
    $query ->bindValue(':f_name', $fistName);
    $query ->bindValue(':l_name', $lastName);
    $query ->bindValue(':email', $email);
    $query ->bindValue(':phone', $tel);
    return $query ->execute();
}

  public function getUsers()
  {
    $sql = "select username,f_name,l_name,email,phone from users";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}
