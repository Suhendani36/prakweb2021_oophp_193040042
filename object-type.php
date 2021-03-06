<?php

use Produk as GlobalProduk;

class Produk{
    public  $judul,  
            $penulis, 
            $penerbit,  
            $harga = 0;

            public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
            }

            public function getLabel(){
                return "$this->penulis, $this->penerbit";
            }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", "250000");
$produk3 = new Produk("Rainbow Six");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);