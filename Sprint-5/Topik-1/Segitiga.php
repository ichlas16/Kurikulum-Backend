<?php

class Segitiga{

    protected   $alas = 8,
                $tinggi = 6;

    public function __construct()
    {
        $phytagoras = sqrt(($this->alas**2) + ($this->tinggi**2));
        $luass = ($this->alas * $this->tinggi) / 2;
        $kelilings = $this->alas + $this->tinggi + $phytagoras;
        echo "<br/>";
        echo "Segitiga";
        echo "<br/>";
        echo "Luas = ".$luass;
        echo "<br/>";
        echo "Keliling = ".$kelilings;
        echo "<br/>";
    }
}

?>