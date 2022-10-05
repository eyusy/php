<?php
include 'fuel.php';

class kendaraan implements fuel{

    public $type;

       public function __construct(public $type = "pertalite")
       {

       }

    public function gettype($type)
    {
       return $this->type = $type;
    }



}
//inisialisasi class objek
$kendaraan = new kendaraan()
echo $kendaraan->gettype(type : "solar")