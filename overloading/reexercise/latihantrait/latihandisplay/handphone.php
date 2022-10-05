<?php
include 'display.php';

class handphone extends display{

    public $pesan = "selamat siang";

    public function tampilkan()
    {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        echo $this->pesan;

    }

public function turnoffscreen()
{

   echo 'layar mati';
}
}
$handphone = new handphone();


echo $handphone->tampilkan();