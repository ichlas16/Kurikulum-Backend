<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ketampanan itu yang Utama</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

            <p>&larr; <a href="index.php">Home</a></p>
            
            <h4>Masuk ke Aplikasi Pengiriman Barang</h4>
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

            <form action="" method="POST">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Masukkan Username" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password" />
                </div>

                <input type="submit" class="btn btn-success btn-block" name="login" value="Log In"/>
            </form>

            </div>

            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</body>
</html>

<?php

include "config.php";
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $sql = "SELECT * FROM login WHERE username='$username'";
    $stmt = $db->prepare($sql);

    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user['username'] === $username){
        echo "bisa";
        // verifikasi password
        if($user['password'] === $password){
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>