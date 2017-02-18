<?php



    class User{

      public function __construct(){
        echo 'User created';
      }

      public $login;
      public $password;
      public $email;
      public $rating = 0;
      protected $isLogged;

      function login(){
        echo "login";
        $this->isLogged = true;
      }
    }

    $a = new User();

    $a->login = 'test1';
    $a->password = 'pass';
    $a->email = "mail";
    $a->rating = 3;

    $b = clone($a);

    $b->login = 'loginb';


    var_dump($a);

    var_dump($b);
