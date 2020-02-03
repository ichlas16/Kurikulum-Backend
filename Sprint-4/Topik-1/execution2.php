<?php
if (isset($_GET['submit2'])){

$namakur = $_GET['namakurir'];
$namapeng = $_GET['namapengirim'];
$asalbar = $_GET['asalbarang'];
$tujbar = $_GET['tujuanbarang'];

echo "Nama Kurir = ".$namakur."<br/>";
echo "Nama Pengirim = ".$namapeng."<br/>";
echo "Asal Barang = ".$asalbar."<br/>";
echo "Tujuan Barang = ".$tujbar."<br/>";
}
?>