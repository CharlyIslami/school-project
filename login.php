<?php
session_start();
include("config.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    sleep(1);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];

        if ($user['level'] === 'admin') {
            header ("Location: dashboard/halaman_admin.php");
            exit;
        }else if ($user['level'] === 'user') {
            header ("Location: dashboard/halaman_user.php");
            exit;
        } 
    } else {
        echo "<script>
        alert('Username atau passwordnya salah bro!');
        window.location.href = 'login.php';
        </script>";
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Form Login</title>
</head>

<body>
    <div class="container">
        <form class="login-form" action="login.php" method="post" id="loginForm">
            <h2>LOGIN</h2>
            <div class="username-container">
            <input type="text" name="username" id="username" placeholder="username" required>
            <i class="fa-regular fa-address-card icon"></i>
            </div>

            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="password" required>
                <i class="fa-solid fa-key icon"></i>
                <span class="toogle-password" onclick="tooglePassword()">Show</span>
            </div>


            <button type="submit" name="login" id="loginBtn">
                <span class="btn-text">Login</span>
                <span class="spinner" style="display: none;"></span>    
            </button>
        </form>
    </div>   
    <script src="js/login.js"></script>
</body>

</html>