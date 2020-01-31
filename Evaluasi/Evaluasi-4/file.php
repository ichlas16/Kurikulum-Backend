<?php
class connect{
    protected   $database = 'localhost',
                $user = 'ichlas',
                $password = '12345';

    function __construct(){
        $this->connect = new PDO("mysql:host=$this->database;dbname=datanilai", $this->user, $this->password);
    }

    function showdata(){
        $perintah = "SELECT * FROM siswa";
        $show = $this->connect->prepare($perintah);
        $show->execute();
        $hasil = $show->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
        }

    function inputdata(){
        echo "Masukkan nama siswa!\n";
        $namas = trim(fgets(STDIN));
        echo "Masukkan nilai siswa!\n";
        $nilai = (int)fgets(STDIN);
        $query = "INSERT INTO siswa (nama, nilai) VALUES ('$namas', '$nilai');";
        $eks = $this->connect->prepare($query);
        $eks->execute();
        $this->showdata();
        }

    function count(){
        $perintah = "SELECT COUNT(siswaID) FROM siswa";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }

    function average(){
        $perintah = "SELECT AVG(nilai) FROM siswa";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }

    function potensi(){
        $perintah = "SELECT nama FROM siswa WHERE siswa.nilai>=80";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }

    function remidi(){
        $perintah = "SELECT nama FROM siswa WHERE siswa.nilai<=65";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }
}

$conn = new connect();

echo "'1' = untuk input data\n";
echo "'2' = untuk menghitung seluruh data\n";
echo "'3' = untuk menghitung nilai rata-rata santri\n";
echo "'4' = untuk mencari santri berpotensi\n";
echo "'5' = untuk melihat santri dengan nilai <= 65\n\n";
$input = (int)fgets(STDIN);

if ($input == "1"){
    $conn->inputdata();
}if ($input == "2"){
    $conn->count();
}if ($input == "3"){
    $conn->average();
}if ($input == "4"){
    $conn->potensi();
}if ($input == "5"){
    $conn->remidi();
}
// $koneksi = new ConnectPdo();
// echo "Masukkan data : ";
// $input = trim(fgets(STDIN));

// if ($input == "1") {
//     $koneksi->getDATA();
// }
?>