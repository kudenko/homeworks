<?php

    $numbers = 123;

    if ((gettype($numbers) != 'integer')) {
      echo 'вы ввели не целое число, или не число';
      exit;
    }
    $numbersToString =(string)$numbers;

    $sum = 0;

    for($a = 0; $a < strlen($numbersToString); $a++){
      $sum += $numbersToString[$a];
    }

    echo "$sum";

 ?>
