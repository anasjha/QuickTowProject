<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashbord">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <p>You have successfully logged in.</p>
        <button><a href="logout.php">Logout</a></button>
    </div>
</body>
</html>
