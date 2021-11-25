<?php
$firstName = $_GET["fname"];
$lastName = $_GET["lname"];
$email = $_GET["email"];
$phoneNum = $_GET["tel"];


$users = [
  [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'email' => 'john@example.com'
  ],
  [
    'firstName' => ' Mary',
    'lastName' => 'Moe',
    'email' => 'mary@example.com'
  ], 
  [
    'firstName' => ' July',
    'lastName' => 'Dooley',
    'email' => 'july@example.com'
  ]
];

$cars = array("Volvo", "BMW", "Toyota");
$ages = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$characterName = "MJ";
$characterAge = "25";
$nameA = "Ahmad";
$is = " is ";
$ageA = 26;
$phrase = "giraffe academy";
include('./view.tpl.php');
