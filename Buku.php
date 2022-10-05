<?php
include "Produk.php";

class Buku extends Produk {
    public function sayHello()
{
     echo "Hellow, saya dari function sayHello yang sudah diturunkan ";
}

}

$obj = new Buku();

echo $obj->sayHello(name : );



?>