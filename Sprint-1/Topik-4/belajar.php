<?php
echo "Masukkan Jumlah Input : ";
$input = (int) fgets(STDIN);//fgets berfungsi menjadikan input pada terminal
//data input bernilai integer (int), dan disimpan dalam variabel $value

for ($i=0; $i<$input;$i++){
    echo "Masukkan Nilai : ";
    $nilai = (int) fgets(STDIN);
    $arr[] = $nilai;
}
// foreach ($arr as $key => $value) {
// }
echo "\n";
// $arr = array(5,9,6,7,9,8,10,7,8);
arsort($arr);
$bakso = array_count_values($arr);//$bakso = 2
echo "Modus = ";
foreach ($bakso as $key => $value) {
    if ($value == max($bakso)){//jika nilai array bakso = 2
        echo $key.", ";
    }
}
echo "\n Frequensi = ".max($bakso);
// foreach ($bakso as $$key => $value){
// }
// echo "Modus = ";

echo "\n";
// $modus = array_keys($bakso);
// echo "Modus = ";
// echo $modus."\n";
rsort($arr);
$count = count($arr);
$sum = array_sum($arr);
$tengah = round($count/2);
$total1 = $sum/$count;
$total2 = $arr[$tengah-1];
echo "Mean = ".$total1;
echo "\n";
echo "Median = ".$total2;
echo "\n";
?>