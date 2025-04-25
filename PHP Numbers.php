<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 5.34;
$c = "25";
$x = 5985;
$y = 59.85;
$z = 1.9e411;
$d = acos(8);
$e = "59.85" + 100;
$f = "Hello";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump(is_int($x));
echo "<br>";
var_dump(is_int($y));
echo "<br>";
var_dump(is_float($y));
echo "<br>";
var_dump($z);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump(is_numeric($x));
var_dump(is_numeric($c));
var_dump(is_numeric($e));
var_dump(is_numeric($f));
echo "<br>";
// Cast float to int
$g = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$g = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?> 


</body>
</html>
