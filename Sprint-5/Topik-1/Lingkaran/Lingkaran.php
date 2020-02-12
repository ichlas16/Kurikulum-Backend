<!-- 
<form action="" method="POST">
    <label>Masukkan diameter</label>
    <input type="text" name="diameter" placeholder="Masukkan diameter lingkaran" />
</form>  -->
<?php

class Lingkaran{

    protected  $diameter = 22,
                $pi = 3.14;

    public function __construct()
    {
        $jari = $this->diameter / 2;
        $luasl = ($this->pi * $jari)**2;
        $kelilingl = 2 * ($this->pi + $jari);
        echo "Luas: ". $luasl;
        echo "<br/>";
        echo $kelilingl;
    }
}

?>