<?php

    $myArray = array();

    for($i = 1; $i <= 100; $i++){
      array_push($myArray, (rand(1, 1000000)));
    }

    $max = $myArray[0];
    $min = $myArray[1];


    foreach ($myArray as $item) {
        if($item > $max){
          $max = $item;
          $keyMax = array_search($max, $myArray);
        }

        if($item < $min){
          $min = $item;
          $keyMin = array_search($min, $myArray);
        }
    }

    // for test
    // echo "$myArray[$keyMax] ";
    // echo "$myArray[$keyMin] ";

    $myArray[$keyMax] = $min;
    $myArray[$keyMin] = $max;

    // for test
    // echo "$myArray[$keyMax] ";
    // echo "$myArray[$keyMin] ";

 ?>
