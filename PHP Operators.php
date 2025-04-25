<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;
$z = 20;
$z += 100;
$a = 50;
$a -= 30;
$b = 5;
$b *= 6;
$c = 10;
$c /= 5;
$d = 15;
$d %= 4;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo $x ** $y;
echo "<br>";
echo $x;
echo "<br>";
echo $z;
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";

$e = 100;  
$f = "100";
$g = 50;
var_dump($e == $f); // returns true because values are equal
echo "<br>";
var_dump($e === $f); // returns false because types are not equal
echo "<br>";
var_dump($e != $f); // returns false because values are equal
echo "<br>";
var_dump($e <> $f); // returns false because values are equal
echo "<br>";
var_dump($e !== $f); // returns true because types are not equal
echo "<br>";
var_dump($e > $g); // returns true because $x is greater than $y
echo "<br>";
var_dump($e < $g); // returns true because $x is less than $y
echo "<br>";
var_dump($e >= $g); // returns true because $x is greater than or equal to $y
echo "<br>";
var_dump($e <= $g); // returns true because $x is less than or equal to $y
?>

<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>

<?php
echo "<br>";
$x = 10;  
echo ++$x;
?>

<?php
echo "<br>";
$x = 10;  
echo $x++;
?>

<?php
echo "<br>";
$x = 10;  
echo --$x;
?> 

<?php
echo "<br>";
$x = 10;  
echo $x--;
?>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>

<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>

<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>

<p>Write a message if at least one of the conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?> 

<p>Write a message if the condition is NOT true.</p>

<?php
$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
?>

<p></p>

<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  

<p></p>

<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>

<p></p>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  

<p></p>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>  

<p></p>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>  

<p></p>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?>

<p></p>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>  

<p></p>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>  

<p></p>

<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?> 

<p></p>

<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>


</body>
</html>
