<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}



require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC ");

//tombol cari
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>daftar mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

    <input type="text" name="keyword" size="30" autofocus
    placeholder="masukan keyword pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>

    </form>
    <br>
    <table border="1" cellpadding="10" cellspaching="0">

    <tr>
        <th>no.</th>
        <th>aksi</th>
        <th>gambar</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id"];?>">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
        <td><?= $row["nisn"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>