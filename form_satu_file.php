<?php
// form_satu_file.php — ACTION="" (self)
if (isset($_REQUEST['nama'])) {
    $nama = $_REQUEST['nama'];
    $umur = $_REQUEST['umur'];
    echo "Halo $nama, umur $umur";
} else {
    echo "Form belum diisi";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Satu File</title>
</head>
<body>

<form action="" method="post">
    Nama: <input name="nama"><br>
    Umur: <input name="umur"><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>
