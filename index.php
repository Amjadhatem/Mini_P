<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resault</title>
    <link rel="icon" type="image/x-icon" href="./C:\xampp\htdocs\Mini_P\img\R2-removebg-preview.png" />
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1>Welcome</h1>
    <br><hr>
    <?php if (isset($user)): ?>
      <div class="container">
        <p><span>Name :</span><?php echo htmlspecialchars($user["F_Name"]); ?></p>
        <p><span>Email :</span><?php echo htmlspecialchars($user["Email"]); ?></p>
        <p><span>Phone Number :</span><?php echo htmlspecialchars($user["Mobile"]); ?> </p>
        </div>
        <?php else: ?>
        <p><a href="logout.php">Log Out</a></p>
    <?php endif; ?>
</body>
</html>
