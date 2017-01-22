<?php

    $a = file_get_contents('test.txt');

    $myArr = explode(' ', $a);

    $wordLength = $_POST['wordLength'];

    $newArr = array();

    foreach ($myArr as $word) {
      if((mb_strlen($word)) > $wordLength){
        array_push($newArr, $word);
      }
    }

    $newString = implode(' ', $newArr);

    file_put_contents('test.txt', $newString);

    echo "Все слова, короче {$wordLength} удалены";

 ?>
