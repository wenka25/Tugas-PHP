<!DOCTYPE html>
<html>

<body>
    <pre>

<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>  

<?php
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);
?>  

<?php
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
];
var_dump($cars);
?>

<?php
$cars = [
    "Volvo",
    "BMW",
    "Toyota",
];
var_dump($cars);
?>

<?php
$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 => "Toyota"
];

var_dump($cars);
?>

<?php
$myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
];

var_dump($myCar);
?>

<?php
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

var_dump($cars);
?>

<?php
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

var_dump($myCar);
?>

<?php
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);
?>

</pre>
</body>

</html>