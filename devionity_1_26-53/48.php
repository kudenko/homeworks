<?php

     $a = 1;
     $b = 1;

     while($a < 100){
       $b = 2;
       $simple = true;

       while($b <= $a / 2){
    
          if(($a % $b) == 0){
          $simple = false;
        }
          $b++;
       }
       if($simple){
         echo "$a, ";
       }
       $a++;

     }

 ?>
