<?php

function scanDirr($dir){

  $a = `ls $dir`;
  print "$a";
}

scanDirr('/var/');
 ?>
