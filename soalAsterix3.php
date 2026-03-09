<?php
$n = 5;

for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $i; $j++){
        echo "&nbsp&nbsp&nbsp"; 
    }
    for($k = $n; $k > $i; $k--){
        echo "* ";
    }
    echo "<br>";
}
?>