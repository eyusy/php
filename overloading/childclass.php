<?php

include 'parentclass.php';

class buku extends Produk
{

     public $harga;

     public function __construct($harga, $nama)
     {
        parent:: $nama = $harga .  "<br>"
     }
     

       public function childdisplay()
       {
        parent ::display();
       }
       public function getharga()
       {
        parent ::display();
       }
}

$buku = new buku(nama : "pemograman web 2", harga : 75000);

 echo $buku->childdisplay();
 