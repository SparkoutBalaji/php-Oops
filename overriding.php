<?php
class laptop {
  public $brand;
  public $model;
  public function __construct( string $brand,int $model) {
    $this->brand = $brand;
    $this->model = $model;
  }
  public function message() {
    echo "The Laptop : {$this->brand} <br/>Model : {$this->model} ";
  }
}

class laps extends laptop {
  public $type;

  public function __construct($brand,$model,string $type) {
    parent::__construct($brand,$model);
   
    $this->type = $type;
  }
  public function message() {
    echo parent::message()."<br/>Type : {$this->type}<br/><br/>";
  }
}
$lap1 = new laps("Hp",2000,"360 degree");
$lap2 = new laps("Dell",2000,"Touch Screen");
$lap3 = new laps("Asus",2000,"120 degree");
$lap1->message();
$lap2->message();
$lap3->message();
?>