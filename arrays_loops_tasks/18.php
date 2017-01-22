<?php

    $weekDays = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница',
     'суббота', 'воскресенье');

     foreach ($weekDays as $day) {

       if(($day == 'суббота') || ($day == 'воскресенье')){

        echo "<b> {$day} </b>";

      }else{

        echo "{$day} ";

      }
     }
 ?>
