<?php

    $f = fopen('test1.txt', 'a+ ');

        $k = 1;

        while ($k <= 10){

         for($a = 0; $k > $a; $a++){

           fwrite($f, "$k");
         }

        fwrite($f, "\r");
         $k++;
       }

    fclose($f);

 ?>
