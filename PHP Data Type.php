<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10.365;
$v = true;
$a = "Hello world!";
$b = 'Hello world!';
$cars = array("Volvo","BMW","Toyota");
var_dump($x);
var_dump($a);
echo "<br>";
var_dump($b);
echo"<br>";
var_dump($y);
echo"<br>";
var_dump($v);
echo"<br>";
var_dump($cars);

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
?>

</body>
</html>
