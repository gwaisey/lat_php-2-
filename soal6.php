<?php
$nilai = 100; 

echo "Nilai Angka: " . $nilai . "<br>";



if($nilai >= 80 && $nilai <= 100){
    $grade = "A";
}else if($nilai >= 70  && $nilai <= 79){
    $grade = "B";
}else if($nilai >= 60 && $nilai <= 69){
    $grade = "C";
}else if($nilai < 69){
    $grade = "D";
}else{
    echo "Nilai Angka Invalid!";
}

echo "Grade: " . $grade;
?>