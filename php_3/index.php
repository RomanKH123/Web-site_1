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
  border-top: 7px solid ;
  border-bottom: 7px solid ;
}
th {
  font-size: 13px;
  font-weight: normal;
  background: #e8edff;
  border-right: 1px solid ;
  border-left: 1px solid ;
  color: #039;
  padding: 8px;
}
td {
  background: #e8edff;
  border-right: 1px solid ;
  border-left: 1px solid ;
  
  padding: 8px;
}

</style>
   
<body>
  <table>
      <tr>
        <th>ID</th>
        <th>Кафедра</th>
        <th>ФИО</th>
        <th>Телефон</th>
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
        <td><a href= "/php_3/index.php">Обновить</a></td>
        <td><a href= "delete.php?id=<?= $item[0] ?>">Удалить</a></td>
      </tr>
       <?php
      }
      ?>
  </table>
<h2>Оформитьу</h2>
   <form action ="create.php" method = "post">
  <p>ID</p>
     <input type ="number" name="id">
     <p>Кафедра</p>
     <input type ="text" name="type">
     <p>ФИО</p>
     <input type ="text" name="Name">
     <p>Телефон</p>
     <input type ="text" name="Status_Control">
     <button type = "submit">Добавить</button>
   </form>
   <h3>Удаление</h3>
<form action="/php_3/delete.php" method="post">
<p>ID</p>
<input type="number" name="id">
<button type="submit">Удалить услугу</button>
</form>
</body>
</html>