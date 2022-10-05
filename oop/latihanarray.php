<?php
class user{
    // 1.array biasa 
    public $numbers = [
        1, 2, 3, 4, 5 
    ];
}    
// 2. array assosiasi 
public $user = [
    'nama' => 'arief'
    'age'  => 16,
    'major'=> 'RPL'
];


// 3. array multi dimensi
public $student = [

    'satu' =>
    [
        'nama' => 'arief'
        'age'  => 16,
        'major'=> 'RPL'
    ],
    'dua' => 
    [
        'nama' => 'arief'
        'age'  => 16,
        'major'=> 'RPL'
    ],
    'tiga' =>
    [
        'nama' => 'arief'
        'age'  => 16,
        'major'=> 'RPL'
    ],
];

echo '<br>';

// menampilkan / mengularkan nilai array biasa

public function getnumbers()
{
    echo 'nilai array biasa' . '<br>';
    foreach ($this->numbers as $key => value) {
        echo $value['name'] . '<br>';
    }
    echo '<hr>';
}
// menampilkan / mengeluarkan nilai assosiasi
   public function getuser()
   {

   }
// inisialisasi class objek
$user = new user();

// menapilkan nilai menggunakan function
echo $user->getnumbers();
echo $user->getuser()
echo $user->getstudent();




echo '<br>';

// menampilkan nilai assosiasi
echo'nilai array assosiasi' . '<br>';
foreach ($student as $key =>value) {
    echo $value . '<br>';
}  
echo '<hr>';
echo 'nilai array multi dimensi' . '<br>';
foreach ($sudent as $key => $value) {
    echo 'nama: ' . $value['name'] . '<br>';
    echo 'umur: ' . $value['age'] . '<br>';
    echo 'jurusan: ' . $value['major'] . '<br>';
    echo '<hr>';
}
define('CHECK STATUS',);