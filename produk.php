<?php

// jualan produk yang berupa 
// komik
// game

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";

    public function getLabel(){
        return "$this->judul, $this->penulis, $this->penerbit";
    }
    
}


// $produk1 = new Produk();
// $produk1->judul = "narutod";
// $produk1->plusProperty = "konotoy";

// $produk2 = new Produk();
$produk2->judul = "One Piece";
$produk2->penulis = "Eichiro Oda";
$produk2->penerbit = "Shonen Jump";
$produk2->harga = "40000";


// echo "Komik : $produk2->judul, $produk2->penulis <br>";
// echo $produk2->getLabel();
// echo "<hr>";

// $produk3 = new Produk();
$produk3->judul = "Naruto Shippuden";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "42000";

echo "komik : " . $produk3->getLabel();



?>