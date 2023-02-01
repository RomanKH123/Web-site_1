<?php

require_once 'connection.php';
$id = $_POST['id'];



mysqli_query($connect, "DELETE FROM `переезды` WHERE `переезды`.`id` = '$id'");

header('Location: index.php');
?>