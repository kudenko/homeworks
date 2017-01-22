<?php

    for($a = 200; $a <401; $a++){
      $simple = true;
      for($k = 2; $k < ($a / 2) ; $k++){
        if(($a % $k) == 0)
        $simple = false;
      }
      if($simple){
        echo "$a";
        break;
      }
    }


 ?>
