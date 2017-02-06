

    <html><body>
    <p>Загрузите новые ссылки</p>
    <form enctype="multipart/form-data" action= "index.php" method= "POST">

    <input type="hidden" name ="MAX_FILE_SIZE" value="99999999">
    <input name="file" type="file">
    <input type= "submit" value= "Отправить">

    </body></html>

    <?php
    $uploaddir = './download/';

    if($_FILES){

    move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir.'new_links');
    echo "Вы загрузили файл, ссылки обновлены.";
    }

    $forbiddenLinks = file('forbidden.txt');
    $db = file('db');
    $newLinks = file('download/new_links');

    $newArr = [];

    foreach($newLinks as $d){
      if(!in_array($d, $forbiddenLinks)){
        array_push($newArr, $d);
      }
    }

    $finalArr = array_merge($newArr, $db);
    $finalArr = array_unique($finalArr);

    file_put_contents('db', $finalArr);
