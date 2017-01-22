<?php

    $a = $_POST['message1'];

function getLongestWords($a){

   $sumArr  = array();

   $arrA = explode(" ", $a);

   function getLong($a, $b){
     if($a == $b) return 0;
  return (strlen($a) > strlen($b) ? -1 : 1);
   }

   usort($arrA, 'getLong');

   for($i = 0; $i < 5; $i++){
     echo "{$arrA[$i]} </br>";
   }
 }

   getLongestWords($a);
 ?>
