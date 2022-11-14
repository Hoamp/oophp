<?php

// jualan produk yang berupa 
// komik
// game

use Produk as GlobalProduk;

class Produk
{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;


    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
           
           
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoLengkap()
    {
        // Komik : Nartod | Masashi kishimoto , Shonen jump (Rp. 40000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        if($this->tipe == "Komik")
        {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } 
        else if($this->tipe == "Game")
        {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", 40000, 100, 0, "Komik");
$produk2 = new Produk("One Piece Jump", "Eichiro Oda", "Shonen Jump", 50000, 0, 100, "Game");

echo $produk1->getInfoLengkap();
echo "<br>".$produk2->getInfoLengkap();
















































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