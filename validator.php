<?php
class Validator
{


    function __construct()
    {
    }

    public function isValidUsername($username)
    {
        if (isset($username) && !empty($username)) {
            if (is_string($username) && $username == trim($username) && strpos($username, ' ') == false) {
                return true;
            }
        }var_dump("h1");
        return false;
    }

    public function isValidfname($fname)
    {
        if (isset($fname) && !empty($fname)) {
            if (is_string($fname) && $fname == trim($fname) && strpos($fname, ' ') == false) {
                return true;
            }
        }var_dump("h2");
        return false;
    }

    public function isValidlname($lname)
    {
        if (isset($lname) && !empty($lname)) {
            if (is_string($lname) && $lname == trim($lname) && strpos($lname, ' ') == false) {
                return true;
            }
        }var_dump("h3");
        return false;
    }

    public function isValidemail($email)
    {
        if (isset($email) && !empty($email)) {
            if (is_string($email) && $email == trim($email) && strpos($email, ' ') == false) {
                return true;
            }
        }var_dump("h4");
        return false;
    }

    public function isValidpassword($password)
    {
        if (isset($password) && !empty($password)) {
            if (is_string($password) && $password == trim($password) && strpos($password, ' ') == false) {
                return true;
            }
        }var_dump("h5");
        return false;
    }

    public function isValidphone($phone)
    {
        if (isset($phone) && !empty($phone)) {
            if (is_string($phone) && $phone == trim($phone) && strpos($phone, ' ') == false && !preg_match("/^\d*$/", $phone)) {
                return true;
            }
        }var_dump("h6");
        return false;
    }

    public function areRequiredFieldsSet($requiredarray)
    {
        foreach ($requiredarray as $index => $requiredvalue) {
            if (!isset($requiredvalue) || empty($requiredvalue)) {
                return false;
            }
        }
        return true;
    }
}