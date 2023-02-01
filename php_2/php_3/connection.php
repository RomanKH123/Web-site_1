<?php
 $host = 'localhost';  // Хост, у нас все локально
 $user = 'root';    // Имя созданного вами пользователя
 $pass = ''; // Установленный вами пароль пользователю
 $db_name = 'db_ignatenko';   // Имя базы данных
 $connection = mysqli_connect($host, $user, $pass, $db_name);
   if(!$connection) {
die ('Ошибка!');
   }
 ?>