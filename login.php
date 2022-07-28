<?php
session_start();

require 'functions.php';


if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM dropshiper WHERE username = '$username'");
    if ($_POST["captcha"]) {
        //cek username
        if (mysqli_num_rows($result) == 1) { //menghitung berapa baris select
            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                //set session
                $_SESSION["login"] = true;
                header("Location: home.php");
                exit;
            }
        } else {
            $error = true;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/logo-light-icon.png">
    <title>Sumber Urip Store</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <?php if (isset($error)) : ?>
        <script>
            swal({
                title: "Username atau password salah",
                text: "Silahkan coba lagi",
                icon: "error",
                dangerMode: true,
            })
        </script>
    <?php endif; ?>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg.svg">
        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="img/avatar.svg">
                <h2 class="title">Welcome</h2><br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>
                <img align="left" src="captcha.php" style="width: 100px; height: 50px; margin-top: 26px; ">
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="captcha" id="captcha" placeholder="Kode Captcah" required>
                    </div>
                </div>
                <a href="register.php">Belum Punya Akun?</a>
                <button type="submit" name="login" class="btn">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>