<!DOCTYPE html>
<html>
<body>

<?php
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}
?> 

<p>Compare two variables to check if they have the same value.</p>

<?php
$x = 100;  
$y = 100;

if ($x == $y) {
  echo "$x is equal to $y";
}
?> 

<p>Compare two variables to check if they are identical.</p>
<p>The identical operator (===) checks the value and the data type, unlike the equal operator (==) that checks only the value.</p>

<?php
$x = 100;  
$y = 100;

if ($x === $y) {
  echo "$x is identical to $y";
}
?>  

<p>Compare two variables and write a message if they don't have the same value.</p>

<?php
$x = 100;  
$y = 50;

if ($x != $y) {
  echo "$x is not equal to $y";
}
?> 

<p>Compare two variables and write a message if they don't have the same value.</p>

<?php
$x = 100;  
$y = 50;

if ($x <> $y) {
  echo "$x is not equal to $y";
}
?>

<p>Compare two variables and write a message if they are NOT identical.</p>

<p>The not identical operator (!==) checks the value and the data type, unlike the not equal operator (!=) that checks only the value.</p>

<?php
$x = 100;  
$y = 50;

if ($x !== $y) {
  echo "$x is not identical to $y";
}
?>  

<p>Compare two variables and write a message if $x is greater than $y.</p>

<?php
$x = 100;  
$y = 50;

if ($x > $y) {
  echo "$x is greater than $y";
}
?>

<p>Compare two variables and write a message if $y is less than $x.</p>

<?php
$x = 100;  
$y = 50;

if ($y < $x) {
  echo "$y is less than $x";
}
?>  

<p>Compare two variables and write a message if $x is greater than, or equal to, $y.</p>

<?php
$x = 100;  
$y = 100;

if ($x >= $y) {
  echo "$x is greater than, or equal to $y";
}
?>

<p>Compare two variables and write a message if $y is less than, or equal to, $x.</p>

<?php
$x = 100;  
$y = 100;

if ($y <= $x) {
  echo "$y is less than, or equal to $x";
}
?>

<p></p>
<?php
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
?>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
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

if ($x == 100 or $y == 80) {
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

<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
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
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
?> 

</body>
</html>
