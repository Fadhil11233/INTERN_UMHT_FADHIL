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
$brt = query("SELECT * FROM berita WHERE id = $id")[0];

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
    <title>ubah Data berita </title>
</head>
<body>
    <h1>ubah Data berita</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $brt["id"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $brt["gambar"]; ?>">
    <ul>

        <li>
            <label for="judul">judul :</label>
            <input type="text" name="judul" id="judul"
            required value="<?= $brt["judul"]; ?>" >
        </li>
        <li>
            <label for="berita">berita :</label>
            <input type="text" name="berita" id="berita"
            required value="<?= $brt["berita"]; ?>" >
        </li>
        <li>
            <label for="gambar">gambar :</label> <br>
            <img src="img/<?= $brt['gambar']; ?>" width="100"> <br> <br>
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