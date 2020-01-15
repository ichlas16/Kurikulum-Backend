<?php
$n = 9;
for ($i = $n ; $i > 0 ; $i--){
    for ($j = $n ; $j > 0 ; $j--){
        if ($i==9 || $j==9 && $i>=5 || $i==5 || $i<=5 && $j==1 || $i==1){
            // echo "(".$i.",".$j.") ";
            // echo " -  ";
            echo "+";
        }
        else{
            // echo "(".$i.",".$j.") ";
            // echo " + ";
            echo "- ";
        }
    }
    echo "<br>";
}
?>