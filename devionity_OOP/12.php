<?php

class Car {

    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;

    public function getPrice($format){
      if($format){
        return number_format($this->price, 2);
      }else{
        return $this->price;
      }
    }

    public function setPrice($price){
      $this->price = round($price, 2);
    }
    public function showBrand(){
      echo $this->brand;
    }

    public function showModel(){
      echo $this->model;
    }
    }

    $a = new Car();
    $a->setPrice(100.1231);
    echo($a->getPrice(true));
