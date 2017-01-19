<?php

    $arr = array(4, 2, 5, 19, 13, 0, 10);
        $isThere = false;
    foreach ($arr as $e) {
      if(($e == 2) || ($e == 3) || ($e == 4)){
        $isThere =true;
      }
    }
    if($isThere){
      echo "Есть!";
    }else{
      "Нет!";
    }

 ?>
