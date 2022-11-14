<?php

// jualan produk yang berupa 
// komik
// game

use Produk as GlobalProduk;
//+++
class Produk
{
    public $judul,
           $penulis,
           $penerbit,
           $harga;
        //    $jmlHalaman,
        //    $waktuMain;


    public function __construct( $judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        // $this->jmlHalaman = $jmlHalaman;
        // $this->waktuMain = $waktuMain;
    }
           
           
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoProduk()
    {
        // Komik : Nartod | Masashi kishimoto , Shonen jump (Rp. 40000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        // if($this->tipe == "Komik")
        // {
        //     $str .= " - {$this->jmlHalaman} Halaman.";
        // } 
        // else if($this->tipe == "Game")
        // {
        //     $str .= " ~ {$this->waktuMain} Jam.";
        // }
        return $str;
    }
}
// ---

// +++
// Child Class dari extends Produk
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

}
// Game
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
// akhir dari child class Produk
// ---




// +++
// CetakInfoProduk
class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}
// ---

$produk1 = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 40000, 100);
$produk2 = new Game("One Piece Jump", "Eichiro Oda", "Shonen Jump", 50000, 50);

echo $produk1->getInfoProduk();
echo "<br>".$produk2->getInfoProduk();
















































// $produk2 = new Produk("Clash of Clans", "Shonn", "Supercell", "50000");

// echo "Komik : " . $produk1->getLabel() . "<br>";
// echo "Game : " . $produk2->getLabel() . "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);


// class CetakNginpo{
//     public function cetak( Produk $produk ){
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//         return $str;
//     }
// }

// $prodak1 = new Produk("Adamantite", "Laora Kiaso", "warashi", "20000");

// $infoProdak1 = new CetakNginpo();
// echo "<br>Buku : " .$infoProdak1->cetak($prodak1);


?>