<?php

     function scan($dir){

     if($a = opendir($dir)){
         while(false!==($file = readdir($a))){
    if (($file != '.') && ($file != '..')){
      $newDir = $dir . DIRECTORY_SEPARATOR .  $file;
      
      if(is_dir($newDir)){
        echo "directory $file </br>";
        scan($newDir);
      }else{
        echo "file $file </br>";
      }

    }

    }
  }
}

scan('/home/grey/hometask/php-academy/homeworks/1.02.2017/');
