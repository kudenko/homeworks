<?php

    $myArray = array();

    $minIndexes = array();
    $maxIndexes = array();

    for($i = 1; $i <= 10; $i++){
      array_push($myArray, (rand(1, 10)));
    }

    $max = $min = $myArray[0];

    foreach ($myArray as $item) {
        if($item > $max){
          $max = $item;
        }

        if($item < $min){
          $min = $item;
        }

    }

    $maxIndexes = array_keys($myArray, $max);
    $minIndexes = array_keys($myArray, $min);

    echo "<pre>";
    print_r($myArray);
    echo "</pre>";
    echo "--------------------";
    echo ("$min - min ---$max - max---");
    for($i = 0; $i < count($maxIndexes); $i++){
      $myArray[$maxIndexes[$i]] = $min;
      }


    for($i = 0; $i < count($minIndexes); $i++){
      $myArray[$minIndexes[$i]] = $max;
      }

    echo "<pre>";
    print_r($myArray);
    echo "</pre>";
 ?>
