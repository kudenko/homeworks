<?php

  $firstFile = file_get_contents('file1.txt');
  $sndFile = file_get_contents('file2.txt');



  $firstWords = explode(' ', $firstFile);
  $sndWords = explode(' ', $sndFile);
  //a task
  $aArr = [];

  $aArr = array_diff($firstWords, $sndWords);

  $a = implode(' ', $aArr);
  file_put_contents('a.txt', $a);
  //b task
  $bArr = [];

  foreach ($firstWords as $k) {
    foreach ($sndWords as $j) {
      if($k === $j){
        array_push($bArr, $k);
        array_push($bArr, $k);
      }
    }
  }

  $b = implode(' ', $bArr);
  file_put_contents('b.txt', $b);
  //c task

  $arrCountF1 = array_count_values($firstWords);
  $arrCountF2 = array_count_values($sndWords);

//  var_dump($arrCountF1);

  $cArr = [];

  foreach ($arrCountF1 as $k => $v) {
    if($v > 2){
      array_push($cArr, $k);

    }
  }

  foreach ($arrCountF2 as $j => $value) {
    if($value >= 2){
      array_push($cArr, $j);
    }
  }
  $c = implode(' ', $cArr);

  file_put_contents('c.txt', $c);
