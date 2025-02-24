<?php
// array
// membuat array
// $hari = array("senin", "selasa", "Rabu");
// $bulan = ["januari", "Februari", "Maret"];
// $arr = [100, "teks", true];
// menampilkan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
//menampilkan 1 elemen pada array
// echo $arr[0];
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head> -->
<body>
    <?php
    // $angka = [1,2,3,4,5,6,7,8,9];
    ?>

    <?php //foreach($angka as $a ) : ?>
    <!-- <div class="kotak"><?=// $a; ?></div> -->
    <?php //endforeach; ?>
</body>
</html>

<!-- materi baru --> 
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
       $angka = [
        [1,2,3], 
        [4,5,6],
        [7,8,9]
    ];
    ?>

     <?php foreach($angka as $a ) : ?>
        <?php foreach($a as $s ) : ?>
      <div class="kotak"><?= $s; ?></div> 
     <?php endforeach; ?>
     <div class="clear"></div>
     <?php endforeach; ?>
</body>
</html> -->

<!-- <?php 
$mahasiswa = [
             ["Fadhil R.F", "07756446", "RPL","fadhil33@gmail.com"],
             ["Fadhil R.F", "07756446", "RPL","fadhil33@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
     <h1>daftar mahasiswa</h1>
     <?php foreach( $mahasiswa as $mhs ) :?>
     <ul>
    <li>nama :<?= $mhs[0]; ?></li>
    <li>Nisn :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>email :<?= $mhs[3]; ?></li>
     </ul>
     <?php endforeach; ?>

</body>
</html> -->

<!-- array asociative
definisinya sama seperti array numerik, kecuali
key-nya adalah string yang kita buat sendiri -->

<!-- <?php
$mahasiswa = [
    [
        "nama" => "Fadhil",
        "nisn" => "00877",
        "email" => "fadhil222gmail.com",
        "jurusan" => "RPL",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "farel",
        "nisn" => "00876",
        "email" => "farel222gmail.com",
        "jurusan" => "RPL",
        "gambar" => "gambar2.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
     <h1>daftar mahasiswa</h1>
     <?php foreach( $mahasiswa as $mhs ) :?>
     <ul>
        <li>
            <img src="<?= $mhs["gambar"]; ?>">
        </li>
    <li>nama :<?= $mhs["nama"]; ?></li>
    <li>Nisn :<?= $mhs["nisn"]; ?></li>
    <li>Jurusan :<?= $mhs["email"]; ?></li>
    <li>email :<?= $mhs["jurusan"]; ?></li>
     </ul>
     <?php endforeach; ?>

</body>
</html>  -->
