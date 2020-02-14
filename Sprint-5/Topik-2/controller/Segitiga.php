<?php

namespace Bangundatar;

class Segitiga{

    public function hitung($alas, $tinggi)
    {
        $phytagoras = sqrt(($alas**2) + ($tinggi**2));
        $luass = ($alas * $tinggi) / 2;
        $kelilings = $alas + $tinggi + $phytagoras;
        echo "<br/>";
        echo "<h4>Segitiga dengan tinggi = $tinggi dan alas = $alas</h4>";
        echo "<br/>";
        echo "Sisi miring = ".$phytagoras;
        echo "<br/>";
        echo "Luas = ".$luass." m";
        echo "<br/>";
        echo "Keliling = ".$kelilings." m";
        echo "<br/>";
    }
}

?>
