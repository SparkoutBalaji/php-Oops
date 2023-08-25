<?php 
class Trust       //Encapsulation
{
  private $name;   //Cannot access the private access modifier in outside of a class by private
  private $amount;

  public function __construct(string $name,int $amount) //This function is called whenever an instance of the class has been created
  {
      $this -> name = $name;
      $this -> amount = $amount;
  }

  public function get_name()  //This method used to access the name 
  {
    return "Name : ".$this -> name."<br/>";   
  }

  public function set_name(string $name)  //This method is used to set the name value
  {
    $this -> name = $name;      
  }

  public function get_amount()  //This method used to access the name
  {
    return "Amount : ".$this ->amount."\n <br/>";    //Return value
  }

  public function set_amount(int $amount)  //This method is used to set the amount value
  {
    $this -> amount = $amount;
  }
}

$privacy = new trust("BALAJI N",20000); // Wrap the data into the private field variables

echo $privacy->get_name(); //get the amount
echo $privacy->get_amount();






?>