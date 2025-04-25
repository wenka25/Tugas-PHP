<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
$y = explode(" ", $x);

echo strtoupper($x);
echo "<br>";
echo strtolower($x);
echo "<br>";
echo str_replace("World", "Dolly", $x);
echo "<br>";
echo strrev($x);
echo "<br>";
echo trim($x);
echo "<br>";
//Use the print_r() function to display the result:
print_r($y);
?> 

</body>
</html>
