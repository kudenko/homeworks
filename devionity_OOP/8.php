<?php
class User{

    public $login;
    public $password;
    public $email;
    public $rating = 0;

    }

    class Car {

        public $brand;
        public $model;
        public $year;
        public $driver;

    }

    $toyota = new Car();
    $mazda = new Car();
    $ford = new Car();

    $toyota->brand = 'Toyota';
    $toyota->model = 'Corolla';
    $toyota->year = 2000;

    $mazda->brand = 'Mazda';
    $mazda->model = 6;
    $mazda->year = 2000;

    $ford->brand = 'Ford';
    $ford->model = 'Taurus';
    $ford->year = 1995;


     $driverToyota = new User();
     $driverMazda = new User();
     $driverFord = new User();

     $toyota->driver = $driverToyota;
     $ford->driver = $driverFord;
     $mazda->driver = $driverMazda;

     var_dump($toyota);
     echo "</br>";
     var_dump($ford);
     echo "</br>";
     var_dump($mazda);
     echo "</br>";


     print_r($toyota);
     echo "</br>";

     print_r($ford);
     echo "</br>";

     print_r($mazda);
