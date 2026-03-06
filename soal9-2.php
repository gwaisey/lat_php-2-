<?php
$angka = [12,45,7,89,34,2];
$terbesar = $angka[0]; // sebagai elemen patokan awal

foreach ($angka as $nilai){
    if($nilai > $terbesar){
        $terbesar = $nilai;
    }
}

echo "Isi array: " . implode(", ", $angka) . "<br>";
echo "Angka terbesar adalah: <b>" . $terbesar . "</b>";
?>