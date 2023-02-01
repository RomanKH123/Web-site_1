<?php
require_once 'connection.php';
$item_id = $_GET['id'];
$item = mysqli_query($connection,"SELECT * FROM `переезды` WHERE `id`='$item_id'");
$item = mysqli_fetch_assoc($item);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Обновить Запись Контроля</h2>
   <form action ="update_full.php" method ="post">
   <input type="hidden" name="idet" value="<?= $item_id ?>">
  <p>ID</p>
     <input type ="number" name="id" value="<?= $item['id'] ?>">
     <p>Тип переезда</p>
     <input type ="text" name="type" value="<?= $item['type'] ?>">
     <p>ФИО Контролера</p>
     <input type ="text" name="Name" value="<?= $item['Name'] ?>">
     <p>Статус Контроля</p>
     <input type ="text" name="Status_Control" value="<?= $item['Status_Control'] ?>">
     <button type = "submit">Обновить</button>
   </form>
</body>
</html>