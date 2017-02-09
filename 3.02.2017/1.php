<?php

    if($_POST['color']){
       $color = $_POST['color'];
       setcookie('color', $_POST['color'], time()+300);
     }else if($_COOKIE['color']){
       $color = $_COOKIE['color'];
     }else{
       //standart color
       $color = 'blue';
     }

    echo "<style>
        body{
        background: $color;
          </style>

    ";

?>

    <html>
      <head>
        <title>select background</title>
      </head>
      <body>
        <p>Выберите цвет фона.</p>

  <form action="1.php" method="post">
   <p><select size="1"  name="color">
    <option selected value="white">white</option>
    <option value="grey">Grey</option>
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
   </select></p>
   <p><input type="submit" value="Отправить"></p>
  </form>
      </body>
    </html>
