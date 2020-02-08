<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Data Barang</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body>
    <header>
        <center><h3 class="animated bounce">Data Barang Dalam Database</h3></center>
    </header>

    <br/>

    <center><table borde='1' cellspacing="0" class="animated bounce">
    <thread>
        <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Alamat Pengirim</th>
            <th>Nama Penerima</th>
            <th>Alamat Penerima</th>
            <th>Opsi</th>
        </tr>
    </thread>
    <tbody>

        <?php
        $query = "SELECT * FROM databar";
        $eks = $db->prepare($query);
        $eks->execute();

        while($barang = $eks->fetch(pdo::FETCH_BOTH)){ ?>
            <tr>

            <td><?php echo $barang['id'];?></td>
            <td><?php echo $barang['pengirim'];?></td>
            <td><?php echo $barang['alpengirim'];?></td>
            <td><?php echo $barang['penerima'];?></td>
            <td><?php echo $barang['alpenerima'];?></td>

            <td>
            <a href=form-edit.php?id=<?php echo $barang['id'];?>>Edit</a>
            <a href=hapus.php?id=<?php echo $barang['id'];?>>Hapus</a>
            </td>
            

            </tr>
        <?php } ?>
        

    </tbody>

    </table></center>
            <br/>
    <center><nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav></center>

    <br/>

</body>
</html>