<?php
class A{

    public function __construct()
    {
        // output : ini dari class A
        echo 'ini dari class' . static::class . '<br>';
    }
}