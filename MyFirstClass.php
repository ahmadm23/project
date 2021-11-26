<?php

class MyFirstClass
{
    private $test;

    function __construct()
    {
        $this->test = 'hey im a test';
    }

    public function getUSers()
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
    }
    public function addNewIndex($oldArray,$addedIndex){
            $newArray=$oldArray;


            return $newArray;
    }
}
