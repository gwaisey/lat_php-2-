<?php
$kalimat ="Polytron Indonesia";
$vokal = ["a","i","u","e","o"]; // daftar huruf vokal
$jumlah = 0; // variabel penampung hasil hitungan

// 1. ubah jadi lowercase semua agar case sensitive
$kalimat_low = strtolower($kalimat);

// 2. hitung panjang kalimat
$panjang = strlen($kalimat_low);

// 3. loop setiap karakter dalam string
for($i=0; $i<$panjang; $i++){
    // ambil karakter di posisi ke-$i
    $karakter = $kalimat_low[$i];

    if (in_array($karakter, $vokal)){
        $jumlah++;
    }
}

// 4. print
echo "Input: " . $kalimat . "<br>";
echo "Jumlah huruf vokal: " . $jumlah;
?>