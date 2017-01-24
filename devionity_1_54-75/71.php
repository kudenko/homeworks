<?php

    function pr(Array $arr){

      foreach ($arr as $key => $value) {
        
        if(gettype($value) == 'array'){

              pr($value);
        }
        else{
          echo "{$key} => {$value}</br>";
        }
      }
    }

pr($myArr);

 ?>
