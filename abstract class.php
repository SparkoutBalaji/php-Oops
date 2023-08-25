<?php 
abstract class abclass
{
  public $name;

  public function __construct($name)
  {
    $this -> name = $name;
  }

  abstract function class() : string ;
  }


class senior extends abclass
{
  public function class() : string
  {
    
    return "Final level of Competition : "."$this->name <br/><br/>";
  }
}

class middle extends abclass
{
  public function class() : string
  {
    return "Middle level of competition : "."$this->name <br/><br/>";
  }
}

class junior extends abclass
{
  public function class() : string
  {
    return "Junior level of competition : "."$this->name <br/><br/>";
  }
}

$senior = new senior("Balaji N");
$middle = new middle("Charan KS");
$junior = new junior('Surendiran N');

echo $senior -> class();
echo $middle -> class();
echo $junior -> class();


?>