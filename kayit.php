<?php  
    include("baglanti.php");
    $username = $email= $password = $passwordtry="";
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordtry = $_POST["passwordtry"];

    }

    if (!empty($_POST["username"])&&!empty($_POST["email"])&&!empty($_POST["password"]) &&$password==$passwordtry) {

        $ekle="INSERT INTO users (username,email,pass) VALUES ('$username','$email','$password')";
        $query = mysqli_query($baglan,$ekle);
        header("Location: login.php");
    }
    $baglan ->close();
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
        <input type="text" name="username" placeholder="username">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="text" name="passwordtry" placeholder="passwordtry">
        <input type="submit" name="submit" value="Gonder">
        <a href="login.php">gırıs yap</a>

        </div>
    </form>
</body>
</html>