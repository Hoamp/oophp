<?php

// jualan produk yang berupa 
// komik
// game

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
        return "$this->judul, $this->penulis, $this->penerbit";
    }
    
}

$produk1 = new Produk("One Piece", "Eichiro Oda", "Shonen Jump", "40000");
$produk2 = new Produk("Clash of Clans", "Shonn", "Supercell", "50000");

echo "Komik : " . $produk1->getLabel() . "<br>";
echo "Game : " . $produk2->getLabel();

class Prodak{
    public $judul,
           $penulis,
           $penerbit;

    public function __construct($judul, $penulis, $penerbit){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }
           
           
    public function isiData(){
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

$buku1 = new Prodak("Sejarah Dunia Yang Disembunyikan", "Saya", "Ya Saya Juga");

echo "<br>Buku 1 :" . $buku1->isiData();










































?>