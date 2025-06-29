<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Pangkat</title>
</head>
<body>

<?php
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat);
}

$hasil = pangkat(5, 4);
echo "5 pangkat 4 = " . $hasil;
?>

</body>
</html>
