<?php
    session_start();
    $a = $_SERVER['SERVER_NAME'];
    $b = $_SERVER['REQUEST_URI'];
    $c = $a . $b;

    $_SESSION['pages'][] = $c;
  ?>

  <html>
    <head>
      <title>HELLO</title>
    </head>
    <body>
      <p><a href="3d.php">На страницу 3 </p>

    </body>
  </html>
