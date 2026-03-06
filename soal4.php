<?php
$n = 5; // batas deret

$hasil = []; //array untuk menampung hasil

echo "Input n: " . $n . "<br>";
echo "Hasil Deret: ";

// loop 1 sampai n
for($i = 1; $i <= $n; $i++){

    // menghitung kuadrat
    $kuadrat = $i * $i;

    // masukkan ke dalam array
    $hasil[] = $kuadrat;
}

// menggabungkan array menjadi string dipisah oleh koma
echo implode(", ", $hasil);
?>
