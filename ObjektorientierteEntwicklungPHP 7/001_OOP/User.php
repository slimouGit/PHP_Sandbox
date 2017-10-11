<?php

class User{
    public $create;
    public $name;
    public $email;
    
    public function __construct($name, $email = ""){
        $this->name = $name;
        $this->email = $email;
        $this->create = date("d.m.Y H:i:s");
    }
    
    public function printUser(){
        return $this->name . ", " . $this->email . ", " . $this->create;
    }
}

$user_01 = new User("Hans", "Hans@gmx.de");
echo $user_01->printUser();