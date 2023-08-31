<?php 
class Overloading
{
    function __call($name, $arguments)
    {
        if ($name == "add") {
          switch (count($arguments)) {
             case 1:
             return $arguments[0];
             case 2:
             return $arguments[0] + $arguments[1];
             break;
             case 3:
             return $arguments[0] + $arguments[1] + $arguments[2];
             break;
             case 4:
             return $arguments[0] + $arguments[1] + $arguments[2] + $arguments[3];
             break;  
             case 5:
             return $arguments[0] + $arguments[1] + $arguments[2] + $arguments[3] + $arguments[4];
             default:
             return "Invalid number of arguments";
             break;
            }
        }
    }
}

$overload = new Overloading();
echo $overload->add(2, 3)."<br/>";                  //return 5
echo $overload->add(2, 3, 4)."<br/>";               //return 9
echo $overload->add(2, 3, 4, 5, 3, 4)."<br/>";      //return invalid
echo $overload->add(1,1,2)."<br/>";                 //return 4
echo $overload->add(2, 5)."<br/>";                  //return 7
echo $overload->add(9,5)."<br/>";                   //return 14