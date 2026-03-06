<?php
$n = 4;
echo "<pre>";

for($i = 0; $i<$n; $i++){
    for($j = 0; $j<$i; $j++){
        echo "&nbsp;&nbsp;";
    }

    for($k = $n; $k>$i; $k--){
        echo "* ";
    }
    echo "\n";
}
echo "</pre>";
?>

