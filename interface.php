<?php

// jualan produk yang berupa 
// komik
// game

use CetakInfoProduk as GlobalCetakInfoProduk;
use Produk as GlobalProduk;

interface InfoProduk
{
    public function getInfoProduk();

}

// parent class produk
abstract class Produk
{
    protected $judul,
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
    

    abstract public function getInfo();
}


// child dari class produk yang mewarisi(inheritance) dari parent class produk(extends)
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " ~ {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk implements InfoProduk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }
 
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}



// untuk mencetak sebuah info dari produk
class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p)
        {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


// tampilan
$produk1 = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 40000, 100);
$produk2 = new Game("One Piece Jump", "Eichiro Oda", "Shonen Jump", 50000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();











































?>