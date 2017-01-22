<?php

    echo "<table border='1'>";

      for($i = 1; $i <= 9; $i++){
        echo "<tr></tr>";
        for($k = 1; $k <= 9; $k++){
          $ik = $i*$k;
          echo "<td> $ik </td>";
        }
      }
    echo "</table>";


 ?>
