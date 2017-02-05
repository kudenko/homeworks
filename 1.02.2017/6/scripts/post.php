<?php

$dir = $_POST['directory'];

//var_dump($dir);



      function scan($dir){

     if($a = opendir($dir)){
         while(false!==($file = readdir($a))){
    if (($file != '.') && ($file != '..')){
      $newDir = $dir . DIRECTORY_SEPARATOR .  $file;

      if(is_dir($newDir)){
        $dateModification = date("Y-m-d h:m:s.", filemtime($newDir));
        $fileSize = fileSize($newDir);
        echo "<img src='../images/folder.jpg' height='50' width='50'/>  directory $file,
        размер - $fileSize байт,  время изменения - '$dateModification' </br>";

        echo "</br>";

        scan($newDir);
      }else{
        $dateModification = date("Y-m-d h:m:s.", filemtime($newDir));
        $fileSize = fileSize($newDir);
        echo "<img src='../images/file.jpg' height='50' width='50'/>
        file $file, $fileSize байт, время изменения - '$dateModification' </br>";
        echo "</br>";

      }

    }

    }
  }
}

    scan($dir);
// scan('/home/grey/hometask/php-academy/homeworks/1.02.2017/');
