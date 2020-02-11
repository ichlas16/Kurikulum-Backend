<?php
session_start();
if(isset($_SESSION["username"])) header("Location: timeline.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <style>
        span{
            background-color: #c24038;
            color: #ffffff;
            border: 1.5px solid #c8c8c8;
            border-radius: 7.5px;
            display: block;
            text-align: center;
            box-shadow: 5px 5px 15px 5px #c8c8c8;
            font-size: 20px;
        }
    </style>
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
                    <input class="form-control" type="text" name="username" placeholder="Masukkan Username" required/>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password" required/>
                </div>

                <input type="submit" class="btn btn-success btn-block" name="login" value="Log In"/>
            </form>

            </div>
            <center><div class="col-md-6, animated flash">
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
                        // verifikasi password
                        if($user['password'] === $password){
                            // login sukses, alihkan ke halaman timeline
                            header("Location: timeline.php");
                        }elseif($user['password'] !== $password){
                            echo "<span>Harap periksa kembali password anda</span>";
                            echo '<img class="img img-responsive" src="img/incorrect.svg" />';
                        }else{
                            echo "Mau lu apa si?";
                        }
                    }elseif($user['username'] !== $username){
                        echo "<span>Harap periksa kembali username anda</span>";
                        echo '<img class="img img-responsive" src="img/incorrect.svg" />';
                    }else{
                        echo "Mau lu apa si?";
                    }
                }if(!isset($_POST['login'])){
                    echo '<img class="img img-responsive" src="img/login.svg" />';
                }
                ?>
            </div></center>
        </div>
    </div>
</body>
</html>
