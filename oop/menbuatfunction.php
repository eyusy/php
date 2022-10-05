<?php

class menbuatfunction{
    public $title = "ini latihan membuat function";
    //4. jenis function yang sering digunakan
    //2. function tanpa parameter dan tanpa nilai return
    public function sayhello(){
        echo 'ini dari class'. __class__ ;
    }
   //2. function dengan parameter dan tidak mengembalikan nilai
   public function perkalian($number = 4){
    echo 'angka yang dimasukkan adalah'. $number;
   }
   //3. function dengan parameter dan mengembalikan nilai
   public function penjumlahan($numb__a, $numb__b){
     return $numb__a*$numb__b;
}
//4. function tanpa parameter dan mengembalikan nilai
public function gettitle(){
    return $this->title;
}
}
$obj=new menbuatfunction();
echo $obj->sayhello();
//output
echo '<hr>';
echo $obj->perkalian();
//output
echo'<hr>';
echo $obj->penjumlahan(7,2);
//output
echo '<hr>';
echo $obj->gettitle();
//output