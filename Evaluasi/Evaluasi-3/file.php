<?php
function ya(){
    Yes::pilihpilih();
}
function gak(){
    echo "nanti";
}
class Register
{
    protected $students =
    [
        [
            'name' => "Arief",
            'nik'  => "TOO1"
        ],
        [
            'name' => "Burhan",
            'nik'  => "TOO2"
        ],
        [
            'name' => "Faizal",
            'nik' => "TOO3"
        ]
    ];
    public function __construct(){
        echo "Terdapat = ".count($this->students)." calon santri yang mendaftar\n\n";
        echo "Berikut informasi calon-calon santri yang mendaftar =\n";
        print_r ($this->students);
        echo "Apa anda ingin melakukan penerimaan calon santri baru?\n(y/n)\n";
        $pilih = trim(fgets(STDIN));
        if ($pilih == "y"){
            ya();
        }if ($pilih == "n"){
    }   
}
}
class Yes extends Register
{
    public static function pilihpilih(){
        echo "\n Berapa santri yang mau anda terima?\n";
        $berapa = (int)fgets(STDIN);
        self::datamana($berapa);
    }protected static function datamana($berapa){
        for ($x=0;$x<=$berapa;$x++)
        echo "\n\n Santri mana yang akan diterima?\n(pilih satu-satu)\n";
        $result = new Register();
        $result->students[0['nik'=>trim(fgets(STDIN))] ];
        
    }
}
$keluar = new Register;
// Register::pilihan(trim(fgets(STDIN)));
?>