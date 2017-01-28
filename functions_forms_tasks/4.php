<?php

function scanDirr($dir){

//   $a = `ls $dir`;
//   print "$a";
// }
    $a = scandir($dir);
      echo "В директории {$dir} находятся: </br>";
    foreach($a as $v){
      if(($v == '.') || ($v == '..')){
        continue;
      }
      echo "{$v} </br>";
    }
  }

scanDirr('/var/');
?>
