<?php
class kellu
{
    protected static 
    $pi = 3.14;

    public static function persegi(){
        echo "=======================\n";
        echo "Silahkan masukkan panjang persegi!\n";
        $panjang = trim(fgets(STDIN));
        echo "=======================\n";
        echo "Silahkan masukkan tinggi persegi!\n";
        $tinggi = trim(fgets(STDIN));
        echo "=======================\n\n\n";
        echo "Luas Persegi : ".$panjang*$tinggi." meter\n";
        echo "Keliling Persegi : ".(($panjang+$tinggi)*2)." meter\n";
    }
    public static function lingkaran(){
        echo "=======================\n";
        echo "Silahkan masukkan diameter lingkaran!\n";
        $diameter = trim(fgets(STDIN));
        echo "=======================\n\n\n";
        echo "Luas Lingkaran : ".(($diameter/2)*self::$pi)." meter\n";
        echo "Keliling Lingkaran : ".($diameter*self::$pi)." meter\n";
    }
    public static function trapesium(){
        echo "=======================\n";
        echo "Silahkan masukkan sisi AB!\n";
        $ab = trim(fgets(STDIN));
        echo "=======================\n";
        echo "Silahkan masukkan sisi BC!\n";
        $bc = trim(fgets(STDIN));
        echo "=======================\n";
        echo "Silahkan masukkan sisi CD!\n";
        $cd = trim(fgets(STDIN));
        echo "=======================\n";
        echo "Silahkan masukkan sisi DA!\n";
        $da = trim(fgets(STDIN));
        echo "=======================\n";
        echo "Silahkan masukkan panjang t!\n";
        $t = trim(fgets(STDIN));
        echo "=======================\n\n\n";
        echo "Luas Lingkaran : ".((($cd+$ab)*$t)/2)." meter\n";
        echo "Keliling Trapesium : ".($ab+$bc+$cd+$da)." meter\n";
}
}
function mulai(){
echo "__________________________________________________________\n";
echo "Tekan 'k' untuk menghitung luas dan keliling 'persegi'!  |\n";
echo "Tekan 'l' untuk menghitung luas dan keliling 'lingkaran'!|\n";
echo "Tekan 't' untuk menghitung luas dan keliling 'trapesium'!|\n";
echo "Tekan 'Ctrl+C' untuk keluar dari aplikasi                |\n";
echo "__________________________________________________________\n";
$bangundatar = trim(fgets(STDIN));
if($bangundatar == "k"){
    kellu::persegi();
}if($bangundatar == "l"){
    kellu::lingkaran();
}if($bangundatar == "t"){
    kellu::trapesium();
}
mulai();
}
mulai();
?>