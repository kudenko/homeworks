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
      <p><a href="2nd.php">На страницу 2 </p>

    </body>
  </html>
