<?php
require_once 'connection.php';
$Id = $_POST['id'];
$Type = $_POST['type'];
$Name = $_POST['Name'];
$Status = $_POST['Status_Control'];
$id = $_POST['idet'];
mysqli_query($connection,"UPDATE `переезды` SET `id` = '$Id', `type` = '$Type', `Name` = '$Name', `Status_Control` = '$Status' WHERE `переезды`.`id` = $id");
header('Location:index.php');
?>