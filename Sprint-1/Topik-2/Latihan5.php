<?php
function enter(){
    echo "<br/>";
}
// diket diameter lingkaran = 9
$a = 2;
$b = 3.14;//π
$d = 9;
$c = (1/2*$d);
$e = $a*$b*$c;
    echo "diket diameter lingkaran = 9";
    enter();
    echo "diket π = 3,14";
    enter();
    echo "diket r = 4,5";
    enter();
    echo "<h1>Keliling Lingkaran</h1>";
    enter();
    echo "Keliling lingkaran = 2 x π x r";
    enter();
    echo "maka hasilnya adalah ".$e;
    enter();
    echo "<h1>Luas Lingkaran</h1>";
    enter();
    echo "Luas lingkaran π x r²";
    enter();
    echo "maka hasinya adalah " . $b*$c**2;
?>