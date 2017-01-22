<?php

    $row = 5;
    $col = 10;
    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    echo "<table border='1'>";

      for($i = 1; $i <= $row; $i++){
        echo "<tr></tr>";
        for($k = 1; $k <= 9; $k++){
          $ik = rand(1, 10000);

          $col = $colors[rand(0, count($colors)-1)];

          echo "<td bgcolor=$col> $ik </td>";
        }
      }
    echo "</table>";


?>
