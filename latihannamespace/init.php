<?php
//require_once 'PRODUK\USER.PHP';
//require_once 'PRODUK\salam';
//require_once 'service\User.php';




spl_autoload_register(function($classname){
    //output : ini dari class user
    $extendsion = '.php';

    $classname = explode('\\' , $classname);

    $classname = end($classname);

   // require_once __DIR__ . '/PRODUK/' . $classname . '.php';

   //QW require_once __DIR__ . '/service/' . $classname . '.php';

});


