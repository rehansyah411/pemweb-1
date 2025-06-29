<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Tangga</title>
     <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpading="5">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $kelas = ($i % 2 == 1) ? "ganjil" : "genap";
            echo "<tr class='$kelas'>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<td>$j<?td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>