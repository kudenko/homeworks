<?php

    $a = $_POST['message1'];
    $b = $_POST['message2'];

function getCommonWords($a, $b){

   $sumArr  = array();

   $arrA = explode(" ", $a);
   $arrB = explode(" ", $b);

   foreach ($arrA as $k) {
      foreach ($arrB as $b) {
        if($k == $b){
          array_push($sumArr, $k);
          continue 2;
        }
      }
   }
   echo "<pre>";
   print_r($sumArr);
   echo "<pre>";
 }

   getCommonWords($a, $b);
 ?>
