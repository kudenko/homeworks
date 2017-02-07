<?php
    session_start();
    $a = $_SERVER['SERVER_NAME'];
    $b = $_SERVER['REQUEST_URI'];
    $c = $a . $b;

    $_SESSION['pages'][] = $c;

    $c = $_SESSION['pages'];

    foreach ($c as $k) {
      echo "Вы были на странице $k </br>";
    }
  ?>
