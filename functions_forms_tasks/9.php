

<html><body>

<form action= "9.php" method= "POST">

<p>Введите строку для переворота! <p>Сообщение_1: </p><p> <textarea rows= "10" cols= "45" name= "message"></textarea></p>

<input type= "submit" value= "Отправить">

</body></html>

<?php


    $str = $_POST['message'];

    function reverse($st){

      $revstr = '';

    if(strlen($st) == 0){

      exit('Вы не ввели строку');
    }
      for($i = (strlen($st)-1); $i >= 0; $i--){

        $revstr .= $st[$i];
      }
      echo "<p>Перевернутая строка:</p>";
      echo "<p>{$revstr}</p>";
    }

    reverse($str);

?>
