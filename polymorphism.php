
<?php  
    class Shap  
    {  
      function draw(){}  
    }  

    class Circle extends Shap  
    {  
    function draw()  
      {  
        print "Circle has been drawn.</br>";  
      }  
    }  
    class Triangle extends Shap  
    {  
    function draw()  
      {  
        print "Triangle has been drawn.</br>";  
      }  
    }  
    class Ellipse extends Shap  
    {  
    function draw()  
      {  
        print "Ellipse has been drawn.<br/>";  
      }  
    }  
       
    $Val=array();  
      
    $Val[0]=new Circle();  
    $Val[1]=new Triangle();  
    $Val[2]=new Ellipse();  
    $Val[3]=new Circle();
    $Val[4]=new Ellipse();  
      
    for($i=0;$i<count($Val);$i++)  
      {  
        $Val[$i]->draw();  
      }  
    ?>  
