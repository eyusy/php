<?php
// membuat class human
   class human{
      //memiliki 3 attribute/data member/properties
      //nama, umur, kelas, jurusan
   
   public $nama;
   public $umur;
   public $kelas;
   public $major;
   public $is_active;

}
// inisialisasi class objek
$human = new human();

//memberikan nilai setiap attributenya
$human->nama = "johan";
$human->umur = 18;
$human->kelas = "xii rpl";
$human->major = "rekayasa perangkat lunak";
$human->is_active = true;

$human->nama = "wianat";
$human->umur = 20;
$human->kelas = "xii rpl";
$human->major = "rekayasa perangkat lunak";
$human->is_active = true;


//tampilkan semua attributenya yang dimilikinya
echo "nama : ". $human -> nama . "<br>";
echo "umur : ". $human -> umur . "<br>";
echo "kelas : ". $human -> kelas . "<br>";
echo "jurusan : ". $human -> major . "<br>";
echo "active :". $human -> is_active . "<hr>";

//output:
//nama: johan
//umur: 18;
//kelas: xii rpl
//jurusan: rekayasa perangkat lunak
//is_active: true


echo "nama : ". $human -> nama . "<br>";
echo "umur : ". $human -> umur . "<br>";
echo "kelas : ". $human -> kelas . "<br>";
echo "jurusan : ". $human -> major . "<br>";
echo "active :". $human -> is_active . "<br>";

//output:
//nama: wianat
//umur: 20;
//kelas: xii rpl
//jurusan: rekayasa perangkat lunak
//is_active: true