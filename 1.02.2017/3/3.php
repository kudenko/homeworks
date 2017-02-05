<?php


    $a = file_get_contents('4.txt');

    $arr = explode(' ', $a);

     sort($arr);

    $a = implode(' ', $arr);
    $a .=  ' ';

    file_put_contents('4sort.txt', $a);
