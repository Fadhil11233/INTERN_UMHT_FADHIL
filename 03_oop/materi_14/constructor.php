<!-- constructor  akan dipanggil setiap new produk-->
<?php 
class Produk {
    public  $judul ,
            $penulis , 
            $penerbit ,
            $harga ;

            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0") {
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
            }
           // method seperti function 
           //this untuk mengambil nilai yang sudah di tulis
           public function getLabel() {
           
                return "$this->penulis, $this->penerbit";
           }
}

$produk1 = new Produk("naruto", "fadhil", "shonen", 30000); //memakai constructor
$produk2 = new Produk("uncharted", "neil", "sony", 20000);
$produk3 = new Produk("Fadhil");

echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo  "game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);