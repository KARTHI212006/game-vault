<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>GameVault</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <h1>🎮 GameVault</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Store</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h2>Welcome to GameVault</h2>
        <p>Your Ultimate Gaming Store</p>
        <button>Explore Games</button>
    </section>

  <section class="games">
<h2>Featured Games</h2>
<div class="game-container">

<?php
$sql = "SELECT * FROM games ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>

    <div class="game-card">
        <img src="uploads/<?php echo $row['image']; ?>">
        <h3><?php echo $row['title']; ?></h3>
        <p>$<?php echo $row['price']; ?></p>
    </div>

<?php } ?>

</div>
</section>



</body>
</html>
