<?php

    $a = file('file.txt');

  file_put_contents('changed_file', $a[0], FILE_APPEND);

    for($i = 1; $i < count($a); $i++){
      $count = 0;
      $b = file('changed_file');
      $str1 = substr($a[$i], 0, (strpos($a[$i], ':')));
      $from1 = strripos($a[$i], ':');
      $to1 = strlen($a[$i]);
      $strEmail1 = substr($a[$i], $from1, $to1);

      for($k = 0; $k < count($b); $k++){

      $str2 = substr($b[$k], 0, (strpos($b[$k], ':')));
      $from2 = strripos($b[$k], ':') ;
      $to2 = strlen($b[$k]);
      $strEmail2 = substr($b[$k], $from2, $to2);

      if(($str1 == $str2) || ($strEmail1 == $strEmail2)){
        $count++;
      }

    }
if($count == 0){
  file_put_contents('changed_file', $a[$i], FILE_APPEND);

}

}
