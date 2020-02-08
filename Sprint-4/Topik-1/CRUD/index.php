<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi CRUD</title>
</head>
<body>
    <header>
    <h1>Aplikasi Organisir Data Barang</h1>
    <h3>Silahkan pilih pilihan yang ada!</h3>
    </header>

    <h4>Opsi</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Penginputan barang berhasil!";
                }else {
                    echo "Penginputan gagal!";
                }
            ?>
        </p>
        <?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Input Data Barang</a></li>
            <li><a href="list-barang.php">Lihat Data Barang</a></li>
        </ul>
        </nav>
        
</body>
</html>