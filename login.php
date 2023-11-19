<?php
include("baglanti.php");
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    // Güvenlik için gelen kullanıcı bilgilerini temizleme
    $email = mysqli_real_escape_string($baglan, $email);
    // Diğer temizleme işlemlerini buraya ekleyebilirsiniz

    $control = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($baglan, $control);

    if ($result && mysqli_num_rows($result) > 0) {
        $userdoc = mysqli_fetch_assoc($result);
        $hash = $userdoc['pass'];

        // Girilen şifreyi hash ile karşılaştırma
        if ($pass== $hash) {
            $_SESSION["username"] = $userdoc['username'];
            $_SESSION["pass"] = $userdoc['pass'];
            header("Location: /proje/index.php");
            exit(); // İşlemi sonlandır
        } else {
            echo "Hatalı şifre!";
        }
    } else {
        echo "Kullanıcı bulunamadı!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form .input{
            background-color: wheat;
           display: flex;
           flex-direction: column;
           padding: 10px;
        }
        form .input input{
            padding: 10px;
            margin: 10px;
        }

    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="input">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="pass" placeholder="password">
        <input type="submit" name="submit" value="Gonder">
        <a href="kayit.php">Uye ol</a>
        </div>
    </form>
</body>
</html>