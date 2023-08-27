<?php 

#[myAttribute(name : "SPARKOUT BALAJI",value : 1007)] 
class myAttribute
{
   

}

$class = new Attribute;

$reflectionClass = new ReflectionClass($class);

$attribute = $reflectionClass->getAttributes();

foreach($attribute as $my)
{
  var_dump($my->getName());
  echo "<br/>";
  var_dump($my->getArguments());
  echo "<br/>";
}



?>