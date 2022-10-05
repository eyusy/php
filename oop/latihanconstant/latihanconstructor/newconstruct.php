<?php

class newconstruct{

    public $nama;
    public $level;

    public function __construct($nama, $level)
    {
        $this->nama = $nama;
        $this->level = $level;
    }

}

  $obj = new newconstruct("boss genichiro" ,"easy");

  echo 'nama judul: ' . $obj->nama . '<br>';
  echo 'level: ' . $obj->level;

  //output
  //nama judul: "ini class new constructor"
  // level: "easy"