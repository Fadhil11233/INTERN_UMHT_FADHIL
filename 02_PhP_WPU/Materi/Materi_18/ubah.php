<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';
// ambil data url

$id = $_GET["id"];
// query data mahsiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
         <script>
        alert('data gagal diubah');
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
    <title>ubah Data Mahasiswa </title>
</head>
<body>
    <h1>ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
    <ul>

        <li>
            <label for="nama">nama :</label>
            <input type="text" name="nama" id="nama"
            required value="<?= $mhs["nama"]; ?>" >
        </li>
        <li>
            <label for="nisn">nisn :</label>
            <input type="text" name="nisn" id="nisn"
            required value="<?= $mhs["nisn"]; ?>" >
        </li>
        <li>
            <label for="email">email :</label>
            <input type="text" name="email" id="email"
            required value="<?= $mhs["email"]; ?>" >
        </li>
        <li>
            <label for="jurusan">jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"
            required value="<?= $mhs["jurusan"]; ?>" >
        </li>
        <li>
            
            <label for="gambar">gambar :</label> <br>
            <img src="img/<?= $mhs['gambar']; ?>" width="50"> <br>
            <input type="file" name="gambar" id="gambar"
            >
        </li>
        <br>
        <li>
            <button typr="submit" name="submit">ubah data</button>
        </li>
    </ul>
    </form>
</body>
</html>