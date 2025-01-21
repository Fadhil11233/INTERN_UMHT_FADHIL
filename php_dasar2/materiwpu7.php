<?php 
// array
// variabel yang dapat memiliki banyak nilai 
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat arraycara lama
// $hari = array("senin", "selasa", "rabu");
// cara baru 
// $bulan = ["januari", "Februari", "maret"];
// $arrl = [123, "tulisan", false];

// // menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan elemen dalam array
// echo $arrl[0];
// echo "<br>";
// echo $bulan [1]

// menambahkan elemen baru pada array 

// var_dump($hari);
// $hari[] = "kamis";
// $hari[] = "jumat";
// echo "<br>";
// var_dump($hari);

?>

<?php 
// pengulangan pada array
// for / foreach
// $angka = [3,2,15,20,11,77,89,99];

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style >
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height:50px;
            margin: 3px;
            float: left;
        }
        .clear{ clear: both;}
        
    </style> 
 </head>
<body>
    count untuk memunculkan semua elemen 
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?> 
     <div class ="kotak"><?php echo $angka[$i];?></div>
    <?php } ?> 

     <div class="clear"></div>  

     <?php foreach( $angka as $a) { ?> 
        <div class ="kotak"><?php echo $a;?></div>
        <?php } ?>
        
         <div class="clear"></div>  
 cara beda 
         <?php foreach( $angka as $a) : ?>
        <div class ="kotak"><?php echo $a;?></div>
        <?php endforeach; ?> 

</body>
</html>
         -->

<!-- <?php 
$mahasiswa = ["Fadhil R.F", "07756446", "RPL","fadhil33@gmail.com"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li><?php echo $mhs; ?></li>
            <?php endforeach; ?>
    </ul>
    
    <!-- cara beda  -->
     <h1>daftar mahasiswa</h1>
     <ul>

    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
     </ul>

</body>
</html> -->

<?php 
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
</html>