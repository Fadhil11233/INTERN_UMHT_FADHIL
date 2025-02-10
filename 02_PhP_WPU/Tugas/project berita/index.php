<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}


require 'functions.php';
$berita = query("SELECT * FROM berita   ORDER BY id  DESC");

//tombol cari
if( isset($_POST["cari"]) ) {
    $berita = cari($_POST["keyword"]);
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
    <center><h1>Daftar berita</h1></center>
    <a href="tambah.php">Tambahkan data Berita</a>
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
        <th>judul</th>
        <th>berita</th>
        <th>gambar</th>
        
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $berita as $row ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id"];?>">hapus</a>
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["berita"]; ?></td>
        <td><img src="img/<?= $row["gambar"];?>" width="100"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>