<!-- constructor  akan dipanggil setiap new produk-->
<?php 
//public bisa di akses dimana saja 
//protected bisa di akses oleh induk dan turunannya
//private hanya bisa di pakai oleh induknya
//abstract tidak bisa di instansiasi
abstract class Produk {
    private  $judul ,
            $penulis , 
            $penerbit,
            $harga,
            $diskon = 0;
            

            public function __construct( $judul = "judul", $penulis = "penulis",
             $penerbit = "penerbit", $harga = 0, ) {
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
            
            }

            public function setjudul( $judul ) {
                $this->judul = $judul;
            }

            public function getjudul() {
                return $this->judul;
            }


            public function setpenulis( $penulis ) {
                $this->penulis = $penulis;
            }

            public function getpenulis() {
                return $this->penulis;
            }


            public function setpenerbit( $penerbit ) {
                $this->penerbit = $penerbit;
            }

            public function getpenerbit() {
                return $this->penerbit;
            }

            public function setdiskon( $diskon) {
                $this->diskon = $diskon;
            }

            public function getdiskon() {
                return $this->diskon;
            }
        

            public function getharga() {
                return $this->harga - ( $this->harga * $this->diskon / 100);
            }
           // method seperti function 
           //this untuk mengambil nilai yang sudah di tulis
           public function getLabel() {
           
                return "$this->penulis, $this->penerbit";
           }
           abstract public function getinfoproduk();
           
           public function getinfo() {
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
        $str = "Komik : " . parent ::getinfo() . "  - {$this->jmlhalaman} Halaman. ";
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
        $str = "Game : " . parent ::getinfo() . " - {$this->waktumain} Jam. ";
            return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();


    public function tambahProduk( Produk $produk) {
        $this->daftarProduk[] = $produk;

    }

    public function cetak( ) {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getinfoProduk()} <br>";
        }
   
        return $str;
    }
}

$produk1 = new Komik("naruto", "fadhil", "shonen", 30000, 100,); //memakai constructor
$produk2 = new Game("uncharted", "neil", "sony", 20000,  20,);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahProduk( $produk1 );
$cetakproduk->tambahProduk( $produk2 );
echo $cetakproduk->cetak();

