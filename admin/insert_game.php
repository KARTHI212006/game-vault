<?php
include "../config.php";

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

$imageName = $_FILES['image']['name'];
$tmpName = $_FILES['image']['tmp_name'];

move_uploaded_file($tmpName, "../uploads/" . $imageName);

$sql = "INSERT INTO games (title,price,image,description)
        VALUES ('$title','$price','$imageName','$description')";

mysqli_query($conn,$sql);

header("Location: add_game.php");
?>
