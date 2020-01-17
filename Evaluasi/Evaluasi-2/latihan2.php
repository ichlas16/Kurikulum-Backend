<?php
function counttriangle(int $base, int $height) {
    $luas = $base * $height / 2;
    echo "Rumus Luas Segitiga = ".$luas."meter<br/>";
    $keliling = sqrt($base**2 + $height**2);
    echo "Rumus keliling segitiga = ".$keliling."meter";
}
echo counttriangle(10, 5);

echo "<br/>";
echo "<br/>";

function countretangle(int $width, int $length){
    $luas = $width * $length;
    echo "Rumus Luas Persegi = ".$luas."meter<br/>";
    $keliling = 2*($width + $length);
    echo "Rumus Luas Persegi - ".$keliling."meter";
}
echo countretangle(10, 6);

echo "<br/>";
echo "<br/>";

function countcircle(int $radius, int $diameter){
    $luas = 3.14*($diameter/2);
    echo "Rumus Luas Lingkaran = ".$luas."meter<br/>";
    $keliling = 2*3.14*$radius;
    echo "Rumus Keliling Lingkaran = ".$keliling."meter<br/>";
}
echo countcircle(4, 8);
?>