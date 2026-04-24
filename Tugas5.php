<?php
if (isset($_POST['baris'])) {
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];

    echo "<table border='1' cellpadding='10'>";

    for ($i = 0; $i < $baris; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $kolom; $j++) {
            echo "<td>Oke</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Tabel</title>
</head>
<body>

<form method="post">
    Baris: <input type="number" name="baris"><br>
    Kolom: <input type="number" name="kolom"><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>
