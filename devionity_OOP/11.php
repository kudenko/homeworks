<?php

class Car {

    public $brand;
    public $model;
    public $year;
    public $driver;

    public function showBrand(){
      echo $this->brand;
    }

    public function showModel(){
      echo $this->model;
    }
}

class User{

    public $login;
    public $password;
    public $email;
    public $rating = 0;
    public $isLogged;

    public function login(){
      echo "login";
      $this->isLogged = true;
    }

    public function logout(){
      echo "logout";
      $this->isLogged = false;
    }

}

$testUser = new User();

$testUser->login();
$testUser->logout();
