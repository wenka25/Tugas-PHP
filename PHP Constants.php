<!DOCTYPE html>
<html>
<body>

<?php
// Case-sensitive constant name (best practice is to use uppercase)
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

// Using const (works in PHP 5.3+)
const MYCAR = "Volvo";
echo MYCAR;
echo "<br>";

// Array constant (PHP 7+)
define("CARS", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo "<br>";
echo CARS[0];

// Function demonstrating constant scope
function myTest() {
    // Constants are global and can be accessed anywhere
    echo "<br><br>";
    echo GREETING;
}

myTest();
?> 

</body>
</html>