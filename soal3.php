<?php

$kata = "katak";

$kata_low = strtolower($kata);

$kata_terbalik = strrev($kata_low);

echo "Input: " . $kata . "<br>";
if($kata_terbalik == $kata){
    echo "Hasil: Palindrom";
}else{
    echo "Hasil: Bukan Palindrom";
}
?>