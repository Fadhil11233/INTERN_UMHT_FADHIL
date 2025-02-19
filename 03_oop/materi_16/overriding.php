<!-- constructor  akan dipanggil setiap new produk-->
<?php 
class Produk {
    public  $judul ,
            $penulis , 
            $penerbit ,
            $harga;
            

            public function __construct( $judul = "judul", $penulis = "penulis",
             $penerbit = "penerbit", $harga = 0, ) {
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
           public function getinfoproduk() {
            // komik : Naruto | masahi, shonen (Rp. 30000) - 100 halaman 
            $str = "{$this->judul} | {$this->getlabel()} 
            (RP. {$this->harga}) ";

            return $str;
           }
}
// class komik jika dipanggil akan menggunakan class komik duu jika tidak ada akan menggunakan class produk karena memakai extends
class Komik extends Produk {
    public $jmlhalaman; 

    public function __construct( $judul = "judul", $penulis = "penulis",
    $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0) {
       
        parent::__construct( $judul , $penulis ,
        $penerbit, $harga );

        $this->jmlhalaman = $jmlhalaman;
    }

    public function getinfoproduk() {
        $str = "Komik : " . parent ::getinfoproduk() . "  - {$this->jmlhalaman} Halaman. ";
            return $str;
    }
}
//parent untuk mengambil method dari kelas parent/induk
class Game extends Produk {
    public $waktumain;

    public function __construct(  $judul = "judul", $penulis = "penulis",
    $penerbit = "penerbit", $harga = 0, $waktumain = 0) {
        parent::__construct( $judul , $penulis ,
        $penerbit , $harga);

        $this->waktumain = $waktumain;
    }

    public function getinfoproduk() {
        $str = "Game : " . parent ::getinfoproduk() . " - {$this->waktumain} Jam. ";
            return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
   
        return $str;
    }
}

$produk1 = new Komik("naruto", "fadhil", "shonen", 30000, 100,); //memakai constructor
$produk2 = new Game("uncharted", "neil", "sony", 20000,  20,);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
