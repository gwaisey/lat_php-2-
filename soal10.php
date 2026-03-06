<?php
$kalimat = "saya suka belajar php";
echo "Input: " . $kalimat . "<br>";
$hasil = str_replace(" ", "_", $kalimat);
echo "Output: " . $hasil;
?>