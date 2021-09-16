<?php


// Jualan Produk
// Komik
// Game

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
}

// $produk1 = new Produk();
// $produk1->judul = "Enigma";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Mario";
// var_dump($produk2->judul);


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "50000";
var_dump($produk3);

echo "Komik : $produk3->penulis, $produk3->penerbit";