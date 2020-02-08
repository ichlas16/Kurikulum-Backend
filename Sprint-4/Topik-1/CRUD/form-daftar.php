<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Input Data Barang</title>
</head>

<body>
    <header>
        <h3>Formulir Input Data Barang</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="pengirim">Nama Pengirim: </label>
            <input type="text" name="pengirim" placeholder="Masukkan nama pengirim" required />
        </p>
        <p>
            <label for="alpengirim">Alamat Pengirim: </label>
            <textarea name="alpengirim" required></textarea>
        </p>
        <p>
            <label for="penerima">Nama Penerima: </label>
            <input type="text" name="penerima" placeholder="Masukkan nama penerima" required />
        </p>
        <p>
            <label for="penerima">Alamat Penerima: </label>
            <textarea name="alpenerima" required></textarea>
        </p>
        <p>
            <input type="submit" value="Input" name="daftar"/>
        </p>

        </fieldset>

    </form>

</body>
</html>