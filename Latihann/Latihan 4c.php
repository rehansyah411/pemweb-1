<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negara ASEAN & Ibukota</title>
</head>
<body>
    <h3>Daftar Negara ASEAN dan Ibukota :</h3>
    <ul>
        <?php
        $asean = [
            "Indonesia" => "D.K.I. Jakarta",
            "Singapura" => "Singapura",
            "Malaysia"  => "Kuala Lumpur",
            "Brunei"    => "Bandar Seri Begawan",
            "Thailand"  => "Bangkok",
            "Laos"      => "Vientiane",
            "Filipina"  => "Manila",
            "Myanmar"   => "Naypyidaw"];
        foreach ($asean as $nrp => $ibukota){
        echo "<li>$nrp : $ibukota</li>";
        }
        ?>
        
        
    </ul>
</body>
</html>