<?php 
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
        <td><?= $row["nisn"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

    </table>
</body>
</html>