
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <?php
    $mahasiswa = [
        "001" => "Rehan",
        "002" => "Asrofi",
        "003" => "Saka",
        "004" => "Riki",
        "005" => "Trio"];
    ?>
    
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>
</body>
</html>