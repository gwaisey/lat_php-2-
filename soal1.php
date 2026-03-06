<?php
// input: "belajar php itu menyenangkan"
// output: "menyenangkan itu php belajar"

//1. input kalimat awal
$kalimat = "belajar php itu menyenangkan";

//2. pecah kalimat menjadi array berdasarkan spasi
$array_kata = explode(" ", $kalimat);

//3. menggabungkan kembali array menjadi string
$array_terbalik = array_reverse($array_kata);

//4. menggabungkan kembali array menjadi string
$hasil = implode(" ", $array_terbalik);

//5. print hasil
echo "Input: " . $kalimat . "<br>";
echo "Output: " . $hasil;
?>