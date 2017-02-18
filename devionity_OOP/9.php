<?php

    class User{

        public $login;
        public $password;
        public $email;
        public $rating = 0;

        public function login(){
          echo "login";
        }

        public function logout(){
          echo "logout";
        }

    }

    $testUser = new User();

    $testUser->login();
    $testUser->logout();
