<?php
for ($n=9-1; $n >= 1 ; $n--) {
    if ( $n >= 0 && $n % 2 == 0){
        continue;
    }else{
        echo $n . " ";
    }
}
?>