<?php
session_start();
if(isset($_SESSION["username"])) header("Location: Views/timeline.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ketampanan itu yang Utama</title>
    <link rel="stylesheet" href="Models/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="Models/css/animate.css">
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <h1>Selamat Datang di Aplikasi Penghitungan Bidang Datar</h1>
                    <p>9 dari 10 orang tidak menyadari bahwa mereka bisa menghasilkan uang jutaan dolar setiap harinya di rumah mereka...</p>
                    </div>
                    <div class="col-md-4, animated pulse">
                    <a href="Views/login.php" class="btn btn-secondary">Log In</a>
                    <a href="Views/register.php" class="btn btn-success">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <img class="img img-responsive" width="1136px" src="Models/img/9142.jpg" />
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>