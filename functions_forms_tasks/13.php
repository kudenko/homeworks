<?php

     $string = 'яблоко черешня вишня вишня черешня
      груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня
    черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко
    черешня черешня вишня яблоко вишня вишня черешня черешня
    груша яблоко черешня вишня';

    function countWords($text){

        $arr = explode(" ", $text);
        $trimArr = array();
        foreach ($arr as $v){
            if(($v == " ") || ($v == '')){
            continue;
            }
        array_push($trimArr, trim($v));
        }
        $newArr = array_count_values($trimArr);


        arsort($newArr);
        
        foreach ($newArr as $key => $value) {
          echo "{$key} - {$value} </br>";
        }
    }

    countWords($string);
