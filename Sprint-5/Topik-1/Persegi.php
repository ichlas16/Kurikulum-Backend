<?php

class Persegi{

    protected   $panjang = 10,
                $lebar = 5;

    public function __construct()
    {
        $luasp = $this->panjang * $this->lebar;
        $kelilingp = ($this->panjang + $this->lebar) * 2;
        echo "<br/>";
        echo "Persegi";
        echo "<br/>";
        echo "Luas = ".$luasp;
        echo "<br/>";
        echo "Keliling = ".$kelilingp;
        echo "<br/>";
    }
}

?>