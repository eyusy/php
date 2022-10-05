<?php
class B{
    public function __construct()
    {
        // output : ini dari class B
        echo 'ini dari class' . static::class . '<br>';
    }
}