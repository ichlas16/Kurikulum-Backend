<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Pengiriman Barang</title>
</head>
<body>
    <form method="POST" action="execution1.php">
        <label>Nama Barang</label>
            <br/>
        <input type="text" name="nama" placeholder="Nama Barang">
            <br/>
        <label>Harga</label>
            <br/>
        <input type="text" name="harga" placeholder="Harga">
            <br/>
        <input type="submit" name="submit1" value="Kirim">
    <hr></hr>
    </form>
    <form method="GET" action="execution2.php">
        <label>Nama Kurir</label>
            <br/>
        <input type="text" name="namakurir" placeholder="Nama Kurir">
            <br/>
        <label>Nama Pengirim</label>
            <br/>
        <input type="text" name="namapengirim" placeholder="Nama Pengirim">
            <br/>
        <label>Asal Barang</label>
            <br/>
        <input type="text" name="asalbarang" placeholder="Asal Barang">
            <br/>
        <label>Tujuan Barang</label>
            <br/>
        <input type="text" name="tujuanbarang" placeholder="Tujuan Barang">
            <br/>
        <input type="submit" name="submit2" value="Kirim">
    </form>
</body>
</html>