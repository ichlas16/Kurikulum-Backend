<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Data Barang</title>
</head>
<body>
    <header>
        <h3>Data Barang Dalam Database</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br/>

    <table borde='1'>
    <thread>
        <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Alamat Pengirim</th>
            <th>Nama Penerima</th>
            <th>Alamat Penerima</th>
        </tr>
    </thread>
    <tbody>

        <?php
        $query = "SELECT * FROM databar";
        $eks = $db->prepare($query);
        $eks->execute();

        while($barang = $eks->fetch(pdo::FETCH_BOTH)){
            echo "<tr>";

            echo "<td>".$barang['id']."</td>";
            echo "<td>".$barang['pengirim']."</td>";
            echo "<td>".$barang['alpengirim']."</td>";
            echo "<td>".$barang['penerima']."</td>";
            echo "<td>".$barang['alpenerima']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$barang['id']."'>Edit</a> | ";
            echo " <a href='hapus.php?id=".$barang['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>

    </table>

</body>
</html>