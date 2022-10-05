<?php
class C{
    public function __construct()
    {
        //output : ini dari class C
        echo 'ini dari class' . static::class . '<br>';
    }
}