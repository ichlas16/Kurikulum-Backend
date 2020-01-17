<?php
$students = [
    'IT-001' => 'Ridwan',
    'IT-010' => 'Achmad',
    'IT-005' => 'Yusuf',
    'IT-002' => 'Arief',
    'IT-004' => 'Dayat',
    'IT-017' => 'Lutfi',
];
ksort($students);
echo "Mengurutkan No. Induk dari yang terkecil = <br/>";
foreach ($students as $key => $value){
    echo $key."<br>";
}
arsort($students);
echo "Mengurutkan nama dari huruf terbesar = <br>";
foreach ($students as $key => $value){
    echo $value."<br/>";
}

// rsort($students);
// $hitung = count($students);
// $sum = array_sum($students);
// $tengah = round($hitung/2);
// echo $students;
?>