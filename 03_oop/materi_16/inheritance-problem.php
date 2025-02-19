<!-- constructor  akan dipanggil setiap new produk-->
<?php 
class Produk {
    public  $judul ,
            $penulis , 
            $penerbit ,
            $harga,
            $jmlhalaman,
            $waktumain,
            $tipe;

            public function __construct( $judul = "judul", $penulis = "penulis",
             $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe ) {
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
              $this->jmlhalaman = $jmlhalaman;
              $this->waktumain = $waktumain;
              $this->tipe = $tipe;
            }
           // method seperti function 
           //this untuk mengambil nilai yang sudah di tulis
           public function getLabel() {
           
                return "$this->penulis, $this->penerbit";
           }
           public function getinfolengkap() {
            // komik : Naruto | masahi, shonen (Rp. 30000) - 100 halaman 
            $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} 
            (RP. {$this->harga}) ";
            if( $this->tipe == "komik" ) {
                $str .= " - {$this->jmlhalaman} Halaman.";
            }else if( $this->tipe == "Game" ) {
                $str .= " ~ {$this->waktumain} Jam.";
            }
            return $str;
           }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
   
        return $str;
    }
}

$produk1 = new Produk("naruto", "fadhil", "shonen", 30000, 100, 0, "komik"); //memakai constructor
$produk2 = new Produk("uncharted", "neil", "sony", 20000, 0, 20, "Game");
echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();
