<?php
//require_once 'produk\A.php';
//require_once 'produk\B.php';
//require_once 'produk\C.php';
//require_once 'produk\user.php';

spl_autoload_register(function($nameclass ){
    
   require_once 'produk/' . $nameclass . '.php';
});