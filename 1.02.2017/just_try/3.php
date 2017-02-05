<?php


    $a = file_get_contents('3.txt');

    $arr = explode('.', $a);

     sort($arr);

    $a = implode('.', $arr);
    $a = substr($a, 2);
    $a .=  '.';

    file_put_contents('3sort.txt', $a);
