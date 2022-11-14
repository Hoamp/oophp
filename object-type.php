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
           $harga;

    public function __construct( $judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
           
           
    public function getLabel()
    {
        return " $this->penulis, $this->penerbit";
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





$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", "40000");
// $produk2 = new Produk("Clash of Clans", "Shonn", "Supercell", "50000");

// echo "Komik : " . $produk1->getLabel() . "<br>";
// echo "Game : " . $produk2->getLabel() . "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


class CetakNginpo{
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$prodak1 = new Produk("Adamantite", "Laora Kiaso", "warashi", "20000");

$infoProdak1 = new CetakNginpo();
echo "<br>Buku : " .$infoProdak1->cetak($prodak1);




































?>