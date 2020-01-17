<?php
$students = [
    'IT-001' => 'Ridwan',
    'IT-010' => 'Achmad',
    'IT-005' => 'Yusuf',
    'IT-002' => 'Arief',
    'IT-004' => 'Dayat',
    'IT-017' => 'Lutfi',
];
foreach ($students as $key => $value){
    array_sum($key);    
    $sum = array_sum($value);
    echo $sum."<br>";
}

// rsort($students);
// $hitung = count($students);
// $sum = array_sum($students);
// $tengah = round($hitung/2);
// echo $students;
?>