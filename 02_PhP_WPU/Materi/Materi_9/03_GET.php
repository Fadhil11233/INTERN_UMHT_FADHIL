<?php
// $_GET
// $_GET adalah variabel superglobal PHP yang digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML dengan metode = "get".
// $_GET juga dapat mengumpulkan data yang dikirim dalam URL.
// Data yang dikirimkan dengan metode GET akan terlihat di URL, dan nilai yang dikirimkan akan terlihat di URL setelah tanda "=".
// Contoh: http://localhost/02_PhP_WPU/Materi/Materi_9/03_GET.php?nama=Joni&umur=20
// $_GET adalah array asosiatif, yang berarti variabel dalam $_GET diakses dengan menggunakan nama kunci (nama variabel).
// Contoh: 
//var_dump($_GET);

//contoh penggunaan get
// akan muncul di latihan 2 ,jika di klik
$mahasiswa = [
    [
      "nama" => "Sandhika Galih",
      "nisn" => "043040023",
      "email" => "sandika@gmail.com",
      "jurusan" => "Teknik Informatika",
      "gambar" => "gambar2.jpg",
    ],
    [
      "nisn" => "0123456780",
      "nama" => "fadhil",
      "email" => "fadhil@gmail.com",
      "jurusan" => "Teknik Mesin",
      "gambar" => "gambar1.jpg",
    ]
    ];
  ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Latihan 2</title>
    </head>
    
    <body>
      <h1>Daftar Mahasiswa</h1>
      <ul>
      <?php foreach ($mahasiswa as $mhs): ?>

        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
           &nisn=<?= $mhs["nisn"]; ?>
           &email=<?= $mhs["email"]; ?>
           &jurusan=<?= $mhs["jurusan"]; ?>
           &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"];?></a> 
      </li>
           <?php endforeach; ?>
      </ul>
    </body>
    
    </html>
