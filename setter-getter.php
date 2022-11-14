<?php

// jualan produk yang berupa 
// komik
// game

use Produk as GlobalProduk;

// parent class produk
class Produk
{
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setDiskon( $diskon )
    {
        $this->diskon = $diskon;
    }
    public function getDiskon( $diskon )
    {
        return $this->diskon = $diskon;
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
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " ~ {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
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
echo "<br>".$produk2->getInfoProduk()."<hr>";


$produk1->setDiskon(50);
echo $produk1->getHarga()."<hr>";

$produk1->setPenulis("sontoy");
echo $produk1->getPenulis();
















































?>