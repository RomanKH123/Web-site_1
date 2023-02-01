<?php
require_once 'connection.php';
$Id = $_POST['id'];
$Type = $_POST['type'];
$Name = $_POST['Name'];
$Status = $_POST['Status_Control'];
mysqli_query($connection,"INSERT INTO `переезды`  VALUES ('$Id', '$Type', '$Name', '$Status')");
header('Location:index.php');