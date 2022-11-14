<?php

// jualan produk yang berupa 
// komik
// game

use Produk as GlobalProduk;

// parent class produk
class Produk
{
    public $judul,
           $penulis,
           $penerbit;

    protected $diskon = 0;
    private $harga;

    public function __construct( $judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    
       
    public function getHarga()
    {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }
           
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }
}


// child dari class produk yang mewarisi(inheritance) dari parent class produk(extends)
class Komik extends Produk
{
    public $jmlHalaman;
    
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function setDiskon( $diskon )
    {
        return $this->diskon = $diskon;
    }

}
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }
    
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}



// untuk mencetak sebuah info dari produk
class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}


// tampilan
$produk1 = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 40000, 100);
$produk2 = new Game("One Piece Jump", "Eichiro Oda", "Shonen Jump", 50000, 50);

echo $produk1->getInfoProduk();
echo "<br>".$produk2->getInfoProduk()."<hr  >";


$produk1->setDiskon(50);
echo $produk1->getHarga();















































?>