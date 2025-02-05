<?php 
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {



    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
         <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php'
        </script>
        ";
    }
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa </title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

    <ul>
        <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama" 
            required placeholder="masukan keyword " autocomplete="off">
        </li>
        <li>
            <label for="nisn">nisn :</label>
            <input type="text" name="nisn" id="nisn"
            required placeholder="masukan keyword " autocomplete="off">
        </li>
        <li>
            <label for="email">email :</label>
            <input type="text" name="email" id="email"
            required placeholder="masukan keyword " autocomplete="off">
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"
            required placeholder="masukan keyword " autocomplete="off">
        </li>
        <li>
            <label for="gambar">gambar :</label>
            <input type="file" name="gambar" id="gambar"
            required >
        </li>
        <br>
        <li>
            <button typr="submit" name="submit">Tambah data</button>
        </li>
    </ul>
    </form>
</body>
</html>