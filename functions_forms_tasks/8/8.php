  <html><body>
    <?php

      if($_POST){
      $str = $_POST['message1'];

      $file = fopen('comments.txt', 'a+');
      fwrite($file, $str."\n");
      fclose($file);
      }

    ?>
  <form action= "8.php" method= "POST">
  <?php

  $badWords = array('жеванный крот', 'щука', 'я драчистыйизумруд');

  $content = file('comments.txt');

  foreach ($content as $v) {
    $newStr = strip_tags(str_replace($badWords,
    'Некорректный комментарий', $v), '<b>');
    echo "<p>  {$newStr}</p>";
    }
  ?>
  <p>Сообщение: </p><p> <textarea rows= "10" cols=
  "45" name= "message1"></textarea></p>
  <input type= "submit" value= "Отправить">

  </body></html>
