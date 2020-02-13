<?php

class Persegi{

    public function hitung($sisi)
    {
        $luasp = $sisi * 2;
        $kelilingp = $sisi * 4;
        echo "<br/>";
        echo "<h4>Persegi dengan sisi = $sisi</h4>";
        echo "<br/>";
        echo "Luas = ".$luasp." m";
        echo "<br/>";
        echo "Keliling = ".$kelilingp." m";
        echo "<br/>";
    }
}

?>