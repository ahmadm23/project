<?php

class Database
{
    private $test;

    function __construct()
    {
        $this->test = 'hey im a test';
    }

    public function getHeaders()
    {

        return "header";
    }
}
