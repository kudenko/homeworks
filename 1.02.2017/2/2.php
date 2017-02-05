<?php

    $fStr = file_get_contents('1st.txt');
    $sStr = file_get_contents('2nd.txt');

    $fArr = explode('.', $fStr);
    $sArr = explode('.', $sStr);
    $arr = [];

    $unfArr = array_diff($fArr, $sArr);
    $unsArr = array_diff($sArr, $fArr);

    $a = array_merge($unfArr, $unsArr);
    $a = implode('.', $a);
    $a.='.';
    file_put_contents('3rd.txt', $a);
