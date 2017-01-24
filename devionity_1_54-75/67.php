<?php

function printArray(Array $arr, $type = 'print_r'){

  if($type == 'var_dump'){
  echo "<pre>";

    var_dump($arr);

  echo "</pre>";
}

if($type == 'print_r'){
echo "<pre>";

  print_r($arr);

echo "</pre>";
}


}
  $arrt = array(1, 2, 3, 'da', 'g');
  printArray($arrt, 'var_dump');
  
 ?>
