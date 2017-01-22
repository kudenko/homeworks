<?php

    $myArray = array();

    $multiply = 1;

    for($i = 0; $i < 10; $i++){
      array_push($myArray, (rand(-100, 100)));
    }
    //for test
    //var_dump($myArray);

    for($k = 0; $k < (count($myArray)); $k += 2){

    if($myArray[$k] > 0){

    $multiply *= $myArray[$k];

  }
  }

  echo $multiply;

  for($m = 1; $m < (count($myArray)); $m += 2){

    if($myArray[$m] > 0){

    echo " $myArray[$m] ";

  }
 }
 
 ?>
