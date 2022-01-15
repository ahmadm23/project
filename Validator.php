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
        }
        return false;
    }

public function isValidpassword($password)
{
    if (isset($password) && !empty($password)) {
        if (is_string($password) && $password == trim($password) && strpos($password, ' ') == false) {
            return true;
        }
    }
    return false;
}
}