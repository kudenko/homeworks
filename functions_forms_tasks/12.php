<?php


    $str =  'А Васька слушает да ест. А воз и ныне там. А вы друзья как
     ни садитесь, все в музыканты не годитесь. А король-то — голый.
     А ларчик просто открывался. А там хоть трава не расти.';

     function revers($text){
       $arr = explode('.', $text);
       $newStr = '';

       for($a = count($arr)-2; $a >= 0; $a--){

          $newStr .= "{$arr[$a]}. ";
       }

       return $newStr;
     }

     echo $a = revers($str);
