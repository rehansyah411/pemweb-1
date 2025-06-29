<?php
$mahasiswa = [
    [
        "nama" => "m.rehansyah",
        "email" => "rehansyah1515@gmail.com",
        "prodi" => "Sistem Informasi",
        "gambar" => "rehan.jpeg"
    ],
    [
        "nama" => "Asrofi",
        "email" => "asrofibinsarwoto@gmail.com",
        "prodi" => "Sistem Informasi",
        "gambar" => "asrofi.jpeg"
    ],
    [
        "nama" => "Saka",
        "email" => "sakabae122@gmail.com",
        "prodi" => "Sistem Informasi",
        "gambar" => "saka.jpeg"
    ],
    [
        "nama" => "Fitra Rifki Pratama ",
        "email" => "ikipratama51@gmail.com",
        "prodi" => "Sistem Informasi",
        "gambar" => "riki.jpeg"
    ],
    [
        "nama" => "trio",
        "email" => "Aseptramadol788@gmail.com",
        "prodi" => "Sistem Informasi",
        "gambar" => "trio.jpeg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5b - Daftar Mahasiswa</title>
    <style>
        .card {
            width: 300px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
        }
        img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        a {
            display: block;
            font-size: 18px;
            margin-top: 10px;
            color: teal;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2 align="center">Daftar Mahasiswa</h2>

<?php foreach ($mahasiswa as $mhs): ?>
    <div class="card">
        <img src="img/<?= $mhs['gambar']; ?>" alt="<?= $mhs['nama']; ?>">
        <a href="Latihan 5c.php?nama=<?= urlencode($mhs['nama']); ?>&email=<?= urlencode($mhs['email']); ?>&prodi=<?= urlencode($mhs['prodi']); ?>&gambar=<?= urlencode($mhs['gambar']); ?>">
            <?= $mhs['nama']; ?>
        </a>
    </div>
<?php endforeach; ?>

</body>
</html>
