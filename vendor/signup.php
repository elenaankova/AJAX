<?php
session_start();

    require_once 'connect.php';
    $full_name = $_POST['full_name'];
    $comment = $_POST['comment'];


$sql = "INSERT INTO `comments` (`id`, `full_name`, `comment`) VALUES (NULL, '$full_name', '$comment')";
mysqli_query($connect, $sql);
$_SESSION['message'] = 'Запись выложена';
header('Location: ../index.php');
