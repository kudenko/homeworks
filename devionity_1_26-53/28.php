
<form action="28.php" method="post">
  <p>Имя:</p>
  <p><input type="text" name="name"/></p>
  <p>email:</p>
  <p><input type="text" name="email"/></p>
  <p>Телефон:</p>
    <p><input type="text" name="phone"/></p>
    <p><input type="submit"/></p>
</form>
<?php
    print_r($_POST);

?>
