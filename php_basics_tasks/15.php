<?php
    $a = 5;
    $b = 2;

    $operator = '%';

    if ($operator == '+'){
      $result = $a + $b;
    }

    if ($operator == '-'){
      $result = $a - $b;
    }
    if ($operator == '*'){
      $result = $a * $b;
    }
    if ($operator == '/'){
      if($b == 0){
        echo "Делить на 0 нельзя";
        exit;
      }
      $result = $a / $b;
    }
    if ($operator == '%'){
      if($b == 0){
        echo "Делить на 0 нельзя";
        exit;
      }
      $result = $a % $b;
    }

    echo "$result";
?>
