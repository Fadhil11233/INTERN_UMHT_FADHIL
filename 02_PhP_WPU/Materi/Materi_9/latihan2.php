<?php
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) ||
!isset($_GET["nisn"]) ||
!isset($_GET["email"]) ||
!isset($_GET["jurusan"]) ||
!isset($_GET["gambar"]))
{
    // redirect yaitu memindahkan halaman
    header ("location: 03_GET.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nisn"];?></li>
        <li><?= $_GET["email"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>
    <a href="03_get.php">kembali ke daftar mahasiswa</a>
</body>
</html>