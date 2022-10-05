<!-- <?php 

// perbedaanconst dengan defline 

// const
//    1.bisa mode case insentive=> case insentive merupakan kasus dimana huruf besar dan huruf kecil di artikan sama 
//    2.tidak bisa mendefinisikan konstanta dalam kondisional constant DENGAN 1 NILAI 

// CARA MENAMPILKAN DATA CHECK_STATUS
// CONSTANT DENGAN 1 NILAI
const CHECK_STATUS = 'HADIR';
// constant dengan nilai array biasa
// const CHECK_NAMA_GORENGAN = [
//     'TAHU ISI' , 'TEMPE','BATAGOR' , TRUE
// ];

const USER = [
    // const dengan nilai array multi dimensi
[
   'NAMA'     => 'CARL',
   'AGE'      => 20,
   'ROLE'     => 'STUDENT',
   'is_active' => true
],
[
    'NAMA'     => 'DEDI',
    'AGE'      => 20,
    'ROLE'     => 'STUDENT',
    'is_active'=> true
],
[
    'NAMA'     => 'JOHSON',
    'AGE'      => 20,
    'ROLE'     => 'STUDENT',
    'is_active'=> false
]
];
// foreach (USER AS KEY => $value) {
//     echo $key . '.' . $value . '<br>';
// }

$index = 1;

// foreach (USER as $key => $value){
//     echo 'No.' . $index++ . '<br>';
//     echo 'Nama: '. $value[ 'NAMA'] .'<br>';
//     echo 'Umur: '. $value[ 'AGE'] .'<br>';
//     echo 'Jabatan: ' . $value[ 'ROLE'] .'<br>';
//     echo 'Status: ' . $value[ 'is_active'] .'<br>';
//     echo '<hr>';
// }
// nilai constant menggunakan method define dengan 1 nilai
define('CHECK_STATUS','Hadir');

define('NAMA_GORENGAN', [
// array biasa
'TAHU ISI', 'BALA-BALA', 'RISOLES', 'BAWAN', TRUE
]);

// menampilkan nilai array biasa
foreach (USER as $key => $value) {
   echo $key . '.'. $value .'<hr>';
}
// output:
// 0. 'TAHU ISI',
// 1. 'BALA-BALA',
// 2. 'RISOLES',
// 3. 'BAWAN',
// 4. TRUE
 //echo '<hr>';

define('STUDENT', [
    // array assosiasi
    'Name' => 'Ariel',
    'Age' => 15,
    'role' => 'student',
    'is_active' => true,
]);

foreach (STUDENT as $key => $value){
    echo '<br>';
}
var_dump(STUDENT);
 define('STUDENT', [
    [
        'Name' => 'DEDI',
        'Age' => 999999999,
        'role' => 'KING ELF',
        'is_active' => true, 
    ],
    [
    'Name' => 'WINATA DODOL',
    'Age' => 44444,
    'role' => 'ORG GA JLS',
    'is_active' => true,
    ],
    [ 
    'Name' => 'CJ KOCAK',
    'Age' => 45234461351,
    'role' => 'DODOL',
    'is_active' => true,
    ]
 ]);

 $index = 1;
    foreach (STUDENT as $key => $value) {
        echo 'no. '. $index++ .'<br>';
        echo 'Nama : '. $value['name'] . '<br>';
        echo 'Umur : '. $value ['age'] . '<br>';
        echo 'Jabatan : ' . $value ['role'] . '<br>';
        echo 'Aktif : ' . $value ['is_active'] . '<br>';
        echo '<hr>';
    }






















































































































































































































































































































































































































































































































































































































































































































































































































































































































    