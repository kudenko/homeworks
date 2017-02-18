<?php

    class User{

    public function __get($login){
      echo "U returned $login";
      return $this->login;
    }

    public function __set($toLogin, $newLogin){
      $this->login=$newLogin;
      echo "u set login";

    }
    protected $login;
    protected $password = 'testpass';
    protected $email;
    protected $rating = 0;
    protected $isLogged;

     function login(){
      echo "login";
      $this->isLogged = true;
    }
  }

  $a = new User();
  echo($a->login);
  echo($a->passwod);
  $a->password = 4;
