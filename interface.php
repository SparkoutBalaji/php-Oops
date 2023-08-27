<?php 
interface dog
{
    public function sound();

}

class doggy implements dog
{
  public function sound()
  {
    return "Wowhhh Wowhh...";
  }
}

class cow implements dog
{
  public function sound()
  {
    return "Maaaahhhh Mahhh...";
  }
}

$dog = new doggy;
$dog = new cow;
echo $dog -> sound();





?>