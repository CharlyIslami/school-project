<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'user'){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navigation">
        <div class="logo">Projek Akhir</div>
        <ul class="navmenu">
            <li><a href="#dashboard" class="option">Dashboard</a></li>
            <li><a href="#game" class="option">Game</a></li>
            <li><a href="../logout.php" class="option">Logout</a></li>
        </ul>
        <div class="user-info"><?php echo $_SESSION['username']; ?></div>
    </nav>    
    
</body>
</html>