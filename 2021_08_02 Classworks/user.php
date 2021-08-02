<?php

class User {
    public $name;
    public $surname;
    public $age;
    public $mail;

    public function __construct($userName, $userSurname, $userAge, $usermMail) {
        $this->name     = $userName;
        $this->surname  = $userSurname;
        $this->age      = $userAge;
        $this->mail     = $usermMail;
    }

}