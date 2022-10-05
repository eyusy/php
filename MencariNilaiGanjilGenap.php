<?php

class MencariNilaiGanjilGenap
{
    public function cariNilaiGanjilGenap($inputNilai){
    //masukkan logicnya disini
    if ($inputNilai %= 2) {
        echo "{$inputnilai} adalah ganjil";
        
    } else {
        echo "{$inputNilai} adalah ganjil";
    }
}
}

$obj = new MencariNilaiGanjilGenap();

echo $obj->cariNilaiGanjilGenap(inputNilai :0);   
