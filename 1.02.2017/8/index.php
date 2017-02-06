<?php

    $acess = 'file.dat';

    $visits = file($acess);

    $current_visitors =  $visits[0];

    $current_visitors++;

    $handle  = fopen($acess, 'w');
    fwrite($handle, $current_visitors);
    fclose($handle);
