<?php
function luas3(int $base, int $height) {
    return $base * $height / 2;
}
echo "Rumus Luas Segitiga = ".luas3(10, "5 meter")."meter";
echo "<br/>";
function keliling3(int $panjang, int $tinggi){
    return sqrt($panjang**2 + $tinggi**2);
}
echo "Rumus Keliling Lingkaran = ".keliling3(10, 5)."meter";

echo "<br/>";
echo "<br/>";

function luasper(int $width, int $length){
    return $width * $length;
}
echo "Rumus Keliling Persegi = ".luasper(11, 7)."meter";
echo "<br/>";
function kelilingper(int $width, int $length){
    return 2*($width + $length);
}
echo "Rumus Luas Persegi = ".kelilingper(11, 7)."meter";
// function familyName($fname, $year) {
//     echo "$fname Refsnes. Born in $year <br>";
// }

// familyName("Hege", "1975");
// familyName("Stale", "1978");
// familyName("Kai Jim", "1983");
?>