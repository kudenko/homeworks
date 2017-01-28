<html><body>

<form enctype="multipart/form-data" action= "6.php" method= "POST">



<input type="hidden" name ="MAX_FILE_SIZE" value="99999999">
<input name="file" type="file">
<input type= "submit" value= "Отправить">

</body></html>

<?php

  $uploaddir = '/home/grey/hometask/php-academy/homeworks/functions_forms_tasks/6/gallery/';
  $dir = '/home/grey/hometask/php-academy/homeworks/functions_forms_tasks/6/gallery';
  $picDir = '/php-academy/homeworks/functions_forms_tasks/6/gallery';

  $c = scandir($dir);
  $a = array();
  //deleting . and .. dir
  foreach($c as $v){
    if(($v == '.') || ($v == '..')){
    continue;
    }
  array_push ($a, $v);
}


  if($_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir.
    $_FILES['file']['name']);
  }

      echo "<table>";

      for($i = 0; $i < count($a); $i++){
        //number == table rows
        if($i % 4 == 0){
          echo("<tr></tr>");
        }

        echo "<td>test<img src='$picDir/$a[$i]' width='100' height='100'></td>";
      }

      echo "</table>";

 ?>
