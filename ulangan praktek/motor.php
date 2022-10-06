<?php

class motor{

    public $nama;
    public $id_mschine;
    public $type;

  public function __construct()
  {
    $this->nama = "supra CN334T";
    $this->id_machine = 37465;
    $this->type = "sport";
  }
  public function __GETNAME()
{
    $this->nama = "beat RG332E";
    $this->id_machine = 5324;
    $this->type = "automatic";
}
  }


  $obj = new motor();

  echo 'nama motor : ' . $obj->nama . "<br>";
  echo 'id_machine : ' . $obj->id_machine . "<br>";
  echo 'type : ' . $obj->type . "<hr>";

  echo 'nama motor : ' . $obj->nama . "<br>";
  echo 'id_machine : ' . $obj->id_machine . "<br>";
  echo 'type : ' . $obj->type . "<BR>";