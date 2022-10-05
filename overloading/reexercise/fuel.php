<?php
// syarat dalam pembuatan interface
// 1. interface adalah antar muka
//2.interface tidak boleh memiliki properties
//3. interface tidak boleh memiliki body code
//4. interface tidak bisa di inisialisasi
//5. function pada interface bisa memiliki
//6. setiap function dalam interface harus di implentasikan kedalam class objek
interface fuel {
    //public $type;
    public function gettype();


}


?>