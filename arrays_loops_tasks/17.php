<?php


      $month = 'январь';

      $monthes = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь',
      'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');

      foreach ($monthes as $k) {
        if($k == $month){
          echo "<b>$k</b> ";
        }else{
          echo "$k ";
        }
      }

 ?>
