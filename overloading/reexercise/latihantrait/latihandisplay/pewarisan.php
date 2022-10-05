<?php
trait role {
    abstract public function getrole():string;
}
class babeh{
    //deklarasi variabel
    public $nama;
    public $umur;
    public $marga;
    public static $index;
    public $is_status;

    //membuat constructor
    public function __construct($nama, $umur, $is_status ='anak')
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->marga = 'tan';
        self::$index = 1;
        $this-> is_status = $is_status;
    }

    public function getmarga(){
        return $this->marga;
    }
    public function getnama()
    {
        return $this->nama;
    }
    public function getstatus()
    {
        return $this->is_status;
    }
    public function getumur()
    {
        return $this->umur;
    }

    public function display()
    {
        echo 'no. ' . self::$index++ . '<br>';
        echo "nama: ". $this->getnama() . "<br>";
        echo "marga: ". $this->getmarga() . "<br>";
        echo "umur: ". $this->getumur() . "<br>";
        if($this->is_status == "bapak"){
            echo 'status:' . $this->getstatus() . '<br>';
            $this->space(). '<br>';
        }else{
           echo 'status: ' . $this->getstatus(). '<br>';

        }
    }

    public function space()
    {
        echo '<hr>';

    }
}

class bocil extends babeh{
    use role;

    public $role;
    public function __construct($nama, $umur, $is_status, $role = "siswa")
    {
       parent::__construct($nama, $umur, $is_status);
       $this->nama = $nama;
       $this->umur = $umur;
       $this->role = $role;
    }


      public function  getaldisplay()
      {
        $this->display() . '<br>';
        echo 'jabatan : ' . $this->getrole();
      }

       public function getrole(): string
       {
        return $this->role;
       }
}   

//inisialisasi class objek
$babeh = new babeh("budi" , 47, 'hidup');

$bocil = new bocil("judi", 23, 'mati');
$bocil = new bocil("strio", 17, 'anak');

          echo $babeh->Display();
          echo $bocil->getAlDisplay();

            
          //putput :
          // no. 1
          //nama : budi
          // marga : sun
          // umur : 47
          // status : hidup
          //---------------------------------
          // no. 2
          //nama : judi
          // marga cao
          // umur : 23
          // status : mati
          // jabatan : penasehat
          ?>
