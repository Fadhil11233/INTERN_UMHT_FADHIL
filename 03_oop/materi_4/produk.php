<!-- property dan method -->
<?php 
class Produk {
    public  $judul = "judul",
            $penulis = "penulis", 
            $penerbit = "penerbit",
            $harga = "0";

           // method seperti function 
           //this untuk mengambil nilai yang sudah di tulis
           public function getLabel() {
           
                return "$this->penulis, $this->penerbit";
           }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// echo "<br>";
// $produk2 = new Produk();
// //mengubah isi property
// $produk2->judul = "tiktok";
// //menambah property
// $produk2->tambahproperty = "hahha";
// var_dump($produk2);
$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi";
$produk3->penerbit = "fadhil";
$produk3->harga = "20000";

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil drucman";
$produk4->penerbit = "sony";
$produk4->harga = "2000000";

echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo  "game : " . $produk4->getlabel();
