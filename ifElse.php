<?php

//deklarasi variabel 
$number = 10;
$nilai =50;


if ($number == $number ){

    echo $number . "+" . $nilai . "=" . ($number + $nilai);

}elseif($number >= $nilai){
    echo  $number . "-" . $nilai . "=" . ($number - $nilai);
}elseif($number <= $nilai){
    echo $number . "x" . $nilai . "=" . ($number *$nilai);
}
else{
    echo"[{$number}] Tidak sama Tipe Data [{$number}]";
}












