<?php

$input = 5;
$faktorial = 1; // faktorial mulai dari 1

echo "Input: " . $input . "<br>";

for($i=$input; $i>=1; $i--){
    
    $faktorial = $faktorial * $i;

}

echo "Hasil Faktorial dari " . $input . " adalah: " . $faktorial;
?>