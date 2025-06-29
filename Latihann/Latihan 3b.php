<!DOCTYPE html>
<html>
<head>
    <title>Isset & empty</title>
    <h2>Perbedaan issert() dan empty()</h2>
    <text>isset() → Mengecek apakah variabel sudah dibuat dan nilainya bukan null.<br>
        empty() → Mengecek apakah variabel kosong (misalnya bernilai "", 0, null, false, array kosong, dll).
    </text>
</head>
<body>
    <?php
    $nilai1 = "";
    $nilai2 = "Hai";

        echo "<h3>Contoh Penggunaan isset() dan empty()</h3>";

        if (isset($nilai1)) {
        echo "Variabel \$nilai1: isset() = TRUE<br>";
        } else {
        echo "Variabel \$nilai1: isset() = FALSE<br>";
        }

        if (empty($nilai1)) {
        echo "Variabel \$nilai1: empty() = TRUE (kosong)<br><br>";
        } else {
        echo "Variabel \$nilai1: empty() = FALSE (tidak kosong)<br><br>";
        }


        if (isset($nilai2)) {
        echo "Variabel \$nilai2: isset() = TRUE<br>";
        }

        if (empty($nilai2)) {
        echo "Variabel \$nilai2: empty() = TRUE (kosong)<br>";
        } else {
        echo "Variabel \$nilai2: empty() = FALSE (tidak kosong)<br>";
        }
    ?>
</body>
</html>
