<?php

class developer
{
  public $name;
  public $domain;
  

  public function __construct($name, $domain)
  {
    $this-> name = $name;
    $this -> domain = $domain;
  }

  public function answer()
  {
    echo "Name : ".$this -> name."<br/>Domain : ".$this ->domain."<br/>";
  }

}

class child extends developer
{
  public function question()
  {
    echo "Software Developer : <br/><br/>";
  }
}

$dev = new child("Balaji N","Php");
// $dev -> question();
$dev -> answer();











?>