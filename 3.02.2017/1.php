<?php
    setcookie('color', $_POST['color'], time()+30);
    if($_POST){
       $color = $_POST['color'];
     }else if($_COOKIE){$color = $_COOKIE['color'];
  }else{$color = 'blue';}

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
