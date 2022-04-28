<?php

require_once 'db.php';

$title = $_POST['title'];
$title1 = $_POST['title1'];
$title2 = $_POST['title2'];


$path = 'upload/' . time() . $_FILES['file']['name'];
if (!move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path)) {
    header('Location: ../index.php');
}
mysqli_query($db, "INSERT INTO `news`(`id`, `title`, `text`, `img`,`url`) VALUES (NULL,'$title','$title1','$path','$title2')");
header('Location: ../index.php');