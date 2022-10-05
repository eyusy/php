<?php
// membuat class user
   class user{
      //memiliki 3 attribute/data member/properties
      //nama, umur, kelas
   
   public $nama;
   public $umur;
   public $kelas;

}
// inisialisasi class objek
$user = new user();

//memberikan nilai setiap attributenya
$user->nama = "johan";
$user->umur = 18;
$user->kelas = "xii rpl";

//tampilkan semua attributenya yang dimilikinya
echo "nama : ". $user -> nama . "<br>";
echo "umur : ". $user -> umur . "<br>";
echo "kelas : ". $user -> kelas . "<br>";

//output:
//nama: johan
//umur: 18;
//kelas: xii rpl




