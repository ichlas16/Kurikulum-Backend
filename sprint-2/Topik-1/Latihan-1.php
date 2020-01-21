<?php
class Perpustakaan
{
protected $daftarbuku =
[ 
    [
        "ISBN" => 001,
        "Judul Buku" => "Resep Mexician Tacos",
        "Jumlah" => 100
    ],
    [
        "ISBN" => 002,
        "Judul Buku" => "Pengobatan Tradisional",
        "Jumlah" => 100
    ],
    [
        "ISBN" => 003,
        "Judul Buku" => "Khalawat Muslimah",
        "Jumlah" => 100
    ]
];
public function minjem($pinjem)
{
if ($pinjem == 0){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->daftarbuku[$pinjem]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->daftarbuku[$pinjem]["Jumlah"];
    $hehe = $kurang - $satu;
    print_r($hehe);
    echo "\n";
}if($pinjem == 1){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->daftarbuku[$pinjem]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->daftarbuku[$pinjem]["Jumlah"];
    $hehe = $kurang - $satu;
    print_r($hehe);
    echo "\n";
}if($pinjem == 2){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->daftarbuku[$pinjem]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->daftarbuku[$pinjem]["Jumlah"];
    $hehe = $kurang - $satu;
    print_r($hehe);
    echo "\n";
}
}
public function balikin($balik)
{
if ($balik == 0){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->daftarbuku[$balik]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->daftarbuku[$balik]["Jumlah"];
    $hehe = $kurang + $satu;
    print_r($hehe);
    echo "\n";
}if($balik == 1){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->daftarbuku[$balik]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->daftarbuku[$balik]["Jumlah"];
    $hehe = $kurang + $satu;
    print_r($hehe);
    echo "\n";
}if($balik == 2){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->daftarbuku[$balik]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->daftarbuku[$balik]["Jumlah"];
    $hehe = $kurang + $satu;
    print_r($hehe);
    echo "\n";
}
}
}
function makan(){
echo "Tekan 'x' jika anda ingin meminjam!\n";
echo "Tekan 'y' jika anda ingin mengembalikan!\n";
echo "Tekan 'Ctrl+C' sembarang jika ingin menyudahi transaksi!\n(x/y)?";
$pinorbal = trim(fgets(STDIN));
    if ($pinorbal == "x"){
        echo "Masukkan ISBN buku sesuai kaidah KBBI!\n";
            $isbn = trim(fgets(STDIN));
            $operperpus = new Perpustakaan();
            $operperpus->minjem($isbn);
    }if($pinorbal == "y"){
        echo "Masukkan ISBN buku sesuai kaidah KBBI!\n";
        $isbn = trim(fgets(STDIN));
        $operperpus = new Perpustakaan();
        $operperpus->balikin($isbn);
    }if($pinorbal != "x" || $pinorbal != "y"){
        echo "____________\nTerimakasih\n____________\n\n";
    }
    makan();
}
makan();
?>