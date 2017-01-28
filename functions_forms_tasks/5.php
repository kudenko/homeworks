<?php

//   function findDirrWord($dir, $word){
//   //$a = `find $dir, $word`;
//   $a = `find $dir -name '$word'`;
//
//   $myArr  = explode(" ", $a);
//
//   foreach ($myArr as $k) {
//     $str = str_replace($dir, "",  $k);
//     echo "$str <br>";
//   }
//   print_r ($myArr);
// }
//
// findDirrWord('/home/grey/Books/', '*.pdf');

  function findDirrWord($dir, $word){
    $a  = scandir($dir);
    foreach ($a as $k) {
      if(strpos($k, $word)){
        echo "$k </br>";
      }
    }
  }
  $findDirrWord = findDirrWord('/home/grey/Books/', 'pdf');
