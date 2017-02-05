<?php


    $a = file_get_contents('3.txt');

    $arr = explode(' ', $a);

     sort($arr);

    $a = implode(' ', $arr);
    $a .=  ' ';

    file_put_contents('3sort.txt', $a);
