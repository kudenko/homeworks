<html><body>

<form action= "10.php" method= "POST">

<p>Подсчитать количество уникальных слов: </p><p> <textarea rows= "10" cols= "45" name= "message"></textarea></p>

<input type= "submit" value= "Отправить">

</body></html>




<?php

    $str = $_POST['message'];

    $a = str_word_count($str, 1);

    $arr = array_count_values($a);

    echo " уникальных слов: ";
    echo (count($arr));

 ?>
