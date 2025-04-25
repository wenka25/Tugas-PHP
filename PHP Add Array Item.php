<!DOCTYPE html>
<html>

<body>

    <pre>
<?php
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

//Output the array:
var_dump($fruits);
?>

<?php
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

//Output the array:
var_dump($cars);
?>

<?php
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

//Output the array:
var_dump($fruits);
?>

<?php
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

//Output the array:
var_dump($cars);
?>
</pre>

</body>

</html>