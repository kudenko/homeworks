<?php

    class User{

        protected $login;
        protected $password;
        protected $email;
        protected $rating = 0;
        protected $isLogged;

         function login(){
          echo "login";
          $this->isLogged = true;
        }
      }

     class Manager extends User{

      protected $login = 'super manager';
      protected $password = 'difficalt password';
      protected $email = 'yamanager@mail.ru';
      protected $rating = 1;
      protected $isLogged = false;

     }

     class Admin extends User{
       protected $login = 'Admin';
       protected $password = 'password';
       protected $email = 'test@gmail.com';
       protected $rating = 10;
       protected $isLogged = true;

     }

     $halfManager = new Manager();
     $Admin = new Admin();

     $halfManager->login();
     $Admin->login();
