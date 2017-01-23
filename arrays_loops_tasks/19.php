<?php

    $weekDays = array('Mon' => 'понедельник', 'Tue' => 'вторник',
    'Wed' => 'среда', 'Thu' => 'четверг', 'Fri' => 'пятница',
    'Sat' => 'суббота', 'Sun' => 'воскресенье');

    $day = date('D');

     foreach ($weekDays as $d => $ruDay) {

       if($d == $day){

        echo "<i> {$ruDay} </i>";

      }else{

        echo "{$ruDay} ";

      }
     }
 ?>
