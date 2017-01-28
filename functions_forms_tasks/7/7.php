<html><body>
<?php

  if($_POST){
    $str = $_POST['message1'];


    $file = fopen('comments.txt', 'a+');
    fwrite($file, $str . '</br>');
    fclose($file);
  }

?>
<form action= "7.php" method= "POST">
<?php
  $f = fopen('comments.txt', 'r');
  $content = fread($f, filesize('comments.txt'));
  echo "<p>{$content}</br></p>";
 ?>
<p>Сообщение: </p><p> <textarea rows= "10" cols=
   "45" name= "message1"></textarea></p>
<input type= "submit" value= "Отправить">

</body></html>
