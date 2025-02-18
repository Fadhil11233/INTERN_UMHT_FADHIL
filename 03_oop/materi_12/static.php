<?php 

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo" . self::$angka++ . "kali";
//     }
// }


// echo ContohStatic::$angka;
// echo"<br>";
// echo ContohStatic::halo();
// echo"<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "halo" . self::$angka++ . "kali  <br>";
    }
}

//jika memakai static akan selalu tetap walaupun object di intansi berulang

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();



?>