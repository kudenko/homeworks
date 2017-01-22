<?php

    $weekDays = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница',
     'суббота', 'воскресенье');

    $day = 'суббота';

     foreach ($weekDays as $d) {

       if($d == $day){

        echo "<i> {$d} </i>";

      }else{

        echo "{$d} ";

      }
     }
 ?>
