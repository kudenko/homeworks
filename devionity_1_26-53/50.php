<?php

$arr = array();
for($a = 0; $a < 10; $a++){
  $arr[$a] = rand(0, 100);
}

foreach ($arr as $k) :
  if(($k % 3) == 0){
    echo "{$k} ";
  }
endforeach;

 ?>
