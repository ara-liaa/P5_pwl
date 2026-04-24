<?php
// registrasi.php

$nama  = $_POST['nama'];
$email = $_POST['email'];
$jk    = $_POST['jk'];

// Array checkbox:
$hobi = $_POST['hobi'];

echo "Nama: $nama";
echo "JK: $jk";

// Loop hobi:
foreach($hobi as $h){
    echo $h . "<br>";
}
?>
