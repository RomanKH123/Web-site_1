<?php
require_once 'connection.php';
$сделки = mysqli_query($connection,"SELECT * FROM `переезды`");
$сделки = mysqli_fetch_all($сделки);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Форма PHP</title>
</head>
<style>
table {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  max-width: 70%;
  width: 70%;
  text-align: center;
  border-collapse: collapse;
  border-top: 7px solid #9baff1;
  border-bottom: 7px solid #9baff1;
}
th {
  font-size: 13px;
  font-weight: normal;
  background: #e8edff;
  border-right: 1px solid #9baff1;
  border-left: 1px solid #9baff1;
  color: #039;
  padding: 8px;
}
td {
  background: #e8edff;
  border-right: 1px solid #aabcfe;
  border-left: 1px solid #aabcfe;
  color: #669;
  padding: 8px;
}

</style>
   
<body>
  <table>
      <tr>
        <th>ID переезда</th>
        <th>Тип переезда</th>
        <th>Имя Контролера</th>
        <th>Статус Контроля</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
      </tr>  

      <?php
      foreach($сделки as $item){
        ?>
       <tr>
        <td><?php echo $item[0] ?></td>
        <td><?php echo $item[1] ?></td>
        <td><?php echo $item[2] ?></td>
        <td><?php echo $item[3] ?></td>
        <td><a href= "update.php?id=<?= $item[0] ?>">Обновить</a></td>
        <td><a href= "delete.php?id=<?= $item[0] ?>">Удалить</a></td>
      </tr>
       <?php
      }
      ?>
  </table>
<h2>Оформить новую сделку</h2>
   <form action ="create.php" method = "post">
  <p>ID переезда</p>
     <input type ="number" name="id">
     <p>Тип переезда</p>
     <input type ="text" name="type">
     <p>Имя Контролера</p>
     <input type ="text" name="Name">
     <p>Статус Контроля</p>
     <input type ="text" name="Status_Control">
     <button type = "submit">Добавить</button>
   </form>
</body>
</html>