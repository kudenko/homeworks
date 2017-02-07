<?php
  session_start();
  if($_POST){
    $_SESSION['name'] = [$_POST['name']];
  }

$a = $_SESSION['name'][0];

echo "Привет, $a";

?>
