<?php

echo "<h3> Tabel Perkalian 1-5 </h3>";


// Loop diluar (Angka Utama)
for($i = 1; $i <= 5; $i++){
    echo "<b>Perkalian $i: </b><br>";

    // Loop dalam (Perhitungan)
    for($j = 1; $j <= 9; $j++){
        $hasil = $i * $j;
        echo "$i x $j = $hasil <br>";
    }

    echo "<br>";
}
?>