<?php
$password = "Graceeee1";

echo  "Password : " . $password . "<br>";

// validasi panjang karakter
if (strlen($password) < 8){
    echo "Error: Password minimal 8 karakter!";
}
// validasi keberadaan angka dengan regex
else if (!preg_match('/[0-9]/', $password)){
    echo "Error: Password harus mengandung minimal satu angka!";
}

else{
    echo "Password valid!";
}
?>