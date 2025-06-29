<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Faktor</title>
</head>
<body>

<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

$angka = 5;
echo "Faktorial dari $angka = " . faktorial($angka);
?>

</body>
</html>
