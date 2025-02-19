<?php
class Game extends Produk  implements InfoProduk {
    public $waktumain;

    public function __construct(  $judul = "judul", $penulis = "penulis",
    $penerbit = "penerbit", $harga = 0, $waktumain = 0) {
        parent::__construct( $judul , $penulis ,
        $penerbit , $harga);

        $this->waktumain = $waktumain;
    }


    public function getinfo() {
        $str = "{$this->judul} | {$this->getlabel()} 
        (RP. {$this->harga}) ";

        return $str;
       }

    public function getinfoproduk() {
        $str = "Game : " . $this->getinfo() . " - {$this->waktumain} Jam. ";
            return $str;
    }
}