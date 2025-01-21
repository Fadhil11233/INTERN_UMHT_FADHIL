<!-- <?php 
// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y")

// time 
// unix timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// menghitung 100 hari dari hari ini
// echo date("l d M Y" , time()-60*60*24*100);

// mktime
// membuat sediri detik 
// jam,menit,detik,bulan,tanggal,tahun
// echo date("l", mktime(0,0,0,2,11,2008));

// strtotime
// sama seperti mktime tapi memakai string
// echo date("l", strtotime("25 aug 1999"));
?> -->
<!-- function jika parameteer tidak di kirim akan mengisi parameter default -->
<!-- <?php 
function salam($waktu = "datang", $nama = "admin") {
    return "selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam("pagi", "Fadhil"); ?></h1>
</body>
</html> -->