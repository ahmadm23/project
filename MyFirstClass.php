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

    public function getUsers()
    {
        $users= [
            [
                'first'=>'john', 
                'last'=>'doe', 
                'email'=>'jdoe@.com',
                'num'=>'215'
            ],
            [
                'first'=>'mary', 
                'last'=>'moe', 
                'email'=>'mmoe@.com',
                'num'=>'267'
            ]
        ];
        return $users;
        $info= [
            [
                '$firstName',
                '$lastName',
                '$email',
                '$phoneNum'
            ],
        ];
        return $info;
    }


    public function addNewIndex($oldArray,$addedIndex){
            $newArray=$oldArray;
            $info = array($firstName, $lastName, $email, $phoneNum);
            array_push($info);
            return $newArray;
    }
    public function getUsers2()
  {
    $sql = "select username,f_name,l_name,email,phone from users";
    $result = $this->mysql->prepare($sql);
    $result->execute();
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }
}
