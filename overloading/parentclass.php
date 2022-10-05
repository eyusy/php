<?php

class Produk
{

     public  $nama;

     public function __construct($nama)
     {
        $this->nama = $nama;
     }

     public function display()
     {
        echo "nama :" . $this->nama;

     }

}

$produk = new produk("ini class produk". "<br>");

echo $produk->display();