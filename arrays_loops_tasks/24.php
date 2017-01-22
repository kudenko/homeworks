<?php

    $numbers = 442158755745;

    $numbersToString =(string)$numbers;

    $number = '5';

    $numberCount = 0;

    for($a = 0; $a < strlen($numbersToString); $a++){
       if($numbersToString[$a] == $number){
         $numberCount++;
       }
    }

    echo "$numberCount";

 ?>
