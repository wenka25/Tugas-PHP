<!DOCTYPE html>
<html>

<body>
    <pre>

<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);
?>

<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $car["model"];
?>

<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$car["year"] = 2024;
var_dump($car);
?>

<?php
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
?>

</pre>
</body>

</html>