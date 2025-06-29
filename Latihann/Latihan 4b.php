<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negara ASEAN</title>
</head>
<body>
    <h3>Daftar Negara ASEAN awal :</h3>
    <ul>
        <?php
        $asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
        foreach ($asean as $negara) {
        echo "<li>$negara</li>";
        }
    ?>
    </ul>

    <h3>Daftar Negara ASEAN baru :</h3>
    <ul>
        <?php
        array_push($asean, "Laos", "Filipina", "Myanmar");
        foreach ($asean as $negara) {
        echo "<li>$negara</li>";
        }
    ?>
    </ul>
</body>
</html>