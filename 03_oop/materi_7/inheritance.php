<!-- constructor  akan dipanggil setiap new produk-->
<?php 
class Produk {
    public  $judul ,
            $penulis , 
            $penerbit ,
            $harga,
            $jmlhalaman,
            $waktumain;

            public function __construct( $judul = "judul", $penulis = "penulis",
             $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, ) {
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
              $this->jmlhalaman = $jmlhalaman;
              $this->waktumain = $waktumain;
            
            }
           // method seperti function 
           //this untuk mengambil nilai yang sudah di tulis
           public function getLabel() {
           
                return "$this->penulis, $this->penerbit";
           }
           public function getinfoproduk() {
            // komik : Naruto | masahi, shonen (Rp. 30000) - 100 halaman 
            $str = "{$this->judul} | {$this->getlabel()} 
            (RP. {$this->harga}) ";

            return $str;
           }
}
// class komik jika dipanggil akan menggunakan class komik duu jika tidak ada akan menggunakan class produk karena memakai extends
class Komik extends Produk {
    public function getinfoproduk() {
        $str = "Komik : {$this->judul} | {$this->getlabel()} 
            (RP. {$this->harga}) - {$this->jmlhalaman} Halaman. ";
            return $str;
    }
}

class Game extends Produk {
    public function getinfoproduk() {
        $str = "Komik : {$this->judul} | {$this->getlabel()} 
            (RP. {$this->harga}) - {$this->waktumain} Jam. ";
            return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
   
        return $str;
    }
}

$produk1 = new Komik("naruto", "fadhil", "shonen", 30000, 100, 0,); //memakai constructor
$produk2 = new Game("uncharted", "neil", "sony", 20000, 0, 20,);
echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
