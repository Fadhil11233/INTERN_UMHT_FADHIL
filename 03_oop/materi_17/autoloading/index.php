<?php
require_once 'App/init.php';

// $produk1 = new Komik("naruto", "fadhil", "shonen", 30000, 100,);
// $produk2 = new Game("uncharted", "neil", "sony", 20000,  20,);

// $cetakproduk = new CetakInfoProduk();
// $cetakproduk->tambahProduk( $produk1 );
// $cetakproduk->tambahProduk( $produk2 );
// echo $cetakproduk->cetak();
// echo "<hr>";





use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
