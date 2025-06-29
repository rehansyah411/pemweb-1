<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5d</title>
</head>
<body>

<h3>Masukan angka:</h3>
<form method="post">
    <input type="number" name="angka" required>
    <input type="submit" value="Tampilkan!">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST["angka"];

    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>
