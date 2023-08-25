<?php
//constructor - destructor 
class classes
{
  public $id;
  public $name;
  public $age;
  public $email;
  public $mobile;
  public $class;

  public function __construct(int $id, string $name, int $age,int $class, string $email, int $mobile)
  {
    echo "Constructor : <br/><br/>";
    echo $this -> id       =   $id."<br/>";
    echo $this -> name     =   $name."<br/>";
    echo $this -> age      =   $age."<br/>";
    echo $this -> class    =   $class."<br/>";
    echo $this -> email    =   $email."<br/>";
    echo $this -> mobile   =   $mobile."<br/>";

    echo "<br/><br/>";
  }

  public function get_classes()
  {
    echo "<br/><br/>Get Values : <br/><br/>";
    return "ID : ".$this -> id."<br/>"."NAME : ".$this -> name."<br/>"."AGE : ".$this -> age."<br/>"."CLASS : ".$this -> class."<br/>"."EMAIL : ".$this -> email."<br/>"."MOBILE : ".$this -> mobile."<br/><br/>";
  }

  public function __destruct()
  {
    echo "<br/><br/>Destructor : <br/><br/>";
    echo "ID : ".$this -> id."<br/>"."NAME : ".$this -> name."<br/>"."AGE : ".$this -> age."<br/>"."CLASS : ".$this -> class."<br/>"."EMAIL : ".$this -> email."<br/>"."MOBILE : ".$this -> mobile."<br/><br/>";
  }
}

//$BackBenchers is a object of a classes class

$BackBenchers0 = new classes(11,"BALAJI N",23,12,"balajiit062@gmail.com",8012964843);
$BackBenchers1 = new classes(12,"CHARAN KS",24,12,"charan@gmail.com",8012324323);
$BackBenchers2 = new classes(13,"SURENDIRAN N",23,12,"suren@gmail.com",9952275696);
$BackBenchers3 = new classes(14,"HARI PRASANTH",24,12,"hariprasanth@gmail.com",9688462216);

echo $BackBenchers0 -> get_classes();
echo $BackBenchers1 -> get_classes();
echo $BackBenchers2 -> get_classes();
echo $BackBenchers3 -> get_classes();


?>