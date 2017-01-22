<?php

    for($a = 1; $a <100; $a++){
      $simple = true;
      for($k = 2; $k < $a ; $k++){
        if(($a % $k) == 0)
        $simple = false;
      }
      if($simple){
        echo "$a, ";
      }
    }


 ?>
