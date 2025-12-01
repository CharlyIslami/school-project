<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'admin') {
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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body id="dashboard">
    <nav class="navigation">
        <a href="#dashboard" class="logo">Projek Akhir</a>
        <ul class="navmenu">
            <li><a href="#dashboard" class="option">Dashboard</a></li>
            <li><a href="#game" class="option">Game</a></li>
            <li><a href="../logout.php" class="option">Logout</a></li>
        </ul>
        <div class="user-info"><?php echo $_SESSION['username']; ?></div>
    </nav>

    <section class="welcome-section">
        <h1>Selamat datang kembali, <span class="admin"><?php echo $_SESSION['username']; ?></h1></span>
        <p>Dashboard khusus untuk memainkan permainan dodge game.</p>
    </section>

    <section class="cards-mini">
        <div class="card-grid">
            <div class="card">
                <h2>Game:</h2>
                <p>1</p>
            </div>
            <div class="card">
                <h2>Status:</h2>
                <p>Online ✅</p>
            </div>
        </div>
    </section>

    <section class="cards-game" id="game">
        <div class="card2">
            <div class="dodge"><img src="../css/dodge.png" alt="dodge.game" </div>
                <h2>Dodge Game</h2>
                <p>Tujuan: Menhindar dari tantangan selama mungkin dan dapatkan score sebanyak mungkin</p>
                <a href="../project/dodgegame.php" class="btn">Mainkan game!!!</a>
            </div>
    </section>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                        <a href="#dashboard" class="logo">Projek Akhir</a>
                </div>

                <div class="footer-column">
                    <h4>Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="#dashboard">Dashboard</a></li>
                            <li><a href="#game">Game</a></li>
                            <li><a href="../logout.php">Logout</a></li>
                        </ul>
                </div>

                <div class="footer-column">
                    <h4>Kontak</h4>
                    <ul class="footer-links">
                        <li>Email: charlyislami19@gmail.com</li>
                        <li>Whatsapp: +62 813-123-456</li>
                        <li>Lokasi: Pekanbaru, Indonesia</li>
                    </ul>
                </div>
            </div>


            <div class="footer-bottom">
                <p>Projek akhir by Charly</p>
                <div class="social-links">
                    <a href="https://www.instagram.com/charr.365/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/CharlyIslami" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.threads.com/@charr.365" target="_blank"><i class="fa-brands fa-threads"></i></a>
                </div>
            </div>
        </div>

    </footer>








</body>

</html>