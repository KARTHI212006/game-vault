<?php include "../config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Game</title>
</head>
<body>

<h2>Add New Game</h2>

<form action="insert_game.php" method="POST" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="Game Title" required><br><br>

    <input type="number" step="0.01" name="price" placeholder="Price" required><br><br>

    <textarea name="description" placeholder="Description"></textarea><br><br>

    <input type="file" name="image" required><br><br>

    <button type="submit">Add Game</button>

</form>

</body>
</html>
