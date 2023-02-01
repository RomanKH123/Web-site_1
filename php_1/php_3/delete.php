<?php
require_once 'connection.php';
$item_id = $_GET['idet'];
mysqli_query($connection,"DELETE FROM `переезды` WHERE `переезды`.`id` = '$item_id'");
header('Location:index.php');
?>