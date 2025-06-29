<?php
$data = [
    [
        "nama" => "Harimau Sumatra",
        "jenis" => "Fauna",
        "asal" => "Sumatra, Indonesia",
        "status" => "Kritis (Critically Endangered)",
        "gambar" => "Harimau_Sumatra.jpg"
    ],
    [
        "nama" => "Orangutan Kalimantan",
        "jenis" => "Fauna",
        "asal" => "Kalimantan, Indonesia",
        "status" => "Terancam Punah (Endangered)",
        "gambar" => "Orangutan_Kalimantan.jpg"
    ],
    [
        "nama" => "Badak Jawa",
        "jenis" => "Fauna",
        "asal" => "Ujung Kulon, Indonesia",
        "status" => "Sangat Kritis (Critically Endangered)",
        "gambar" => "Badak_Jawa.jpg"
    ],
    [
        "nama" => "Anoa",
        "jenis" => "Fauna",
        "asal" => "Sulawesi, Indonesia",
        "status" => "Terancam (Endangered)",
        "gambar" => "Anoa.jpg"
    ],
    [
        "nama" => "Burung Cenderawasih",
        "jenis" => "Fauna",
        "asal" => "Papua, Indonesia",
        "status" => "Terancam",
        "gambar" => "Burung_Cenderawasih.jpg"
    ],
    [
        "nama" => "Bekantan",
        "jenis" => "Fauna",
        "asal" => "Kalimantan",
        "status" => "Terancam Punah",
        "gambar" => "Bekantan.jpg"
    ],
    [
        "nama" => "Elang Jawa",
        "jenis" => "Fauna",
        "asal" => "Pulau Jawa",
        "status" => "Kritis",
        "gambar" => "Elang_Jawa.jpg"
    ],
    [
        "nama" => "Rafflesia Arnoldii",
        "jenis" => "Flora",
        "asal" => "Sumatra dan Kalimantan",
        "status" => "Langka",
        "gambar" => "Rafflesia_arnoldii.jpg"
    ],
    [
        "nama" => "Anggrek Hitam",
        "jenis" => "Flora",
        "asal" => "Kalimantan Timur",
        "status" => "Langka",
        "gambar" => "Anggrek_Hitam.jpg"
    ],
    [
        "nama" => "Pohon Ulin",
        "jenis" => "Flora",
        "asal" => "Kalimantan",
        "status" => "Terancam",
        "gambar" => "Pohon_Ulin.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Flora dan Fauna Terancam Punah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 255, 255);
        }
        h2 {
            text-align: center;
            margin-top: 30px;
            color:rgb(0, 153, 71);
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color:rgb(183, 255, 175);
        }
        img {
            width: 200px;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<h2>Daftar Flora dan Fauna Terancam Punah di Indonesia</h2>

<table>
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Asal</th>
        <th>Status</th>
        <th>Gambar</th>
    </tr>

    <?php foreach ($data as $d): ?>
    <tr>
        <td><?= $d["nama"]; ?></td>
        <td><?= $d["jenis"]; ?></td>
        <td><?= $d["asal"]; ?></td>
        <td><?= $d["status"]; ?></td>
        <td><img src="img/<?= $d["gambar"]; ?>" alt="<?= $d["nama"]; ?>"></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
