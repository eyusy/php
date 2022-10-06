<?php
trait role {
    abstract public function getrole():string;
}
class superclass{
    //deklarasi variabel
    public $nama;
    public $level;
    public static $index;
    public $is_status;

    //membuat constructor
    public function __construct($nama, $level, $is_status ="easy")
    {
        $this->nama = $nama;
        $this->level = $level;
        self::$index = 1;
        $this-> is_status = $is_status;
    }

    public function __construct($nama, $level, $is_status ="easy")
    {

      
    }

    public function getnama()

        return $this->nama;
        {
    }
    public function getstatus()
    {
        return $this->is_status;
    }
    public function getlevel()
    {
        return $this->level;
    }
    public function display()
    {
        
        echo 'no. ' . self::$index++ . '<br>';
        echo "nama: ". $this->getnama() . "<br>";
        echo "level: ". $this->getlevel() . "<br>";
        if($this->is_status == "bapak"){
            echo 'status:' . $this->getstatus() . '<br>';
            $this->space(). '<br>';
        }else{
           echo 'status: ' . $this->getstatus(). '<br>';
           

        }
    }

    public function space()
{
    echo  "<hr>";
}
    
}

class superclass extends subclass{
    use role;

    public $role;
    public function __construct($nama, $level, $is_status, $role = "siswa")
    {
       parent::__construct($nama, $level, $is_status);
       $this->nama = $nama;
       $this->level = $level;
       $this->role = $role;
    }


      public function  getaldisplay()
      {
        $this->display() . "<hr>";
        echo 'jabatan : ' . $this->getrole();
      }

       public function getrole(): string
       {
        return $this->role;
       }
}   

//inisialisasi class objek
$superclass = new superclass("superclass" , 47, 'underRated');

$superclass = new subclass("subclass", 23, 'underRated');
$superclass = new subclass("subclass", 17, 'underrated');

          echo $superclass->Display();
          echo "<hr>";
          echo $subclass->getAlDisplay();

            
          //putput :
          // no. 1
          //superclass : superclass
          // level : 47
          // status : underRated
          //-----------------------------
          // no. 2
          //nama : subclass
          // level : 23
          // status : underRated
          // jabatan : penasehat
          
