<?php

    $myArr = array(1, 2, 3, 4, 5, 6, 7, 'j', 'g', 'c', 's', 'a');

    function printArray(Array  & $arr){

        array_push($arr, count($arr));

        echo "<pre>";

        print_r($arr);

        echo "</pre>";

  }

  printArray($myArr);
  echo "<pre>";

  print_r($myArr);

  echo "</pre>";

 ?>
