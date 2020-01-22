<?php
function lingkaran(int $diameter, int $jarijari): float {
    $jari = $diameter/2;
    if($jarijari <= 0 || $diameter <= 0){
        throw new Exception('Nilai input tidak boleh bernilai nol atau minus!');
    }if($jarijari != $jari){
        throw new Exception('Masukkan nilai jari jari sesuai dengan nominal diameter!');
    }
        $pi = 3.14;
    echo "Keliling lingkaran = ";
    $keliling = $pi * $diameter;
    echo $keliling."\n";
    echo "Luas lingkaran = ";
    $luas = ($pi * ($jarijari**2));
    echo $luas."\n";
    return $keliling;
    return $luas;
}
$result = null;
try{
    $result = lingkaran(10, 7);
}catch (Exception $e){
    echo "Ditemukan error pada ".__FILE__."\nbaris ke -".$e->getLine()."\n";
    echo $e->getMessage()."\n";
}
?>