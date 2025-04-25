<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
?>  

<p></p>
<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 
?>

<P></P>
<?php  
$i = 0;

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  
  echo $i;
} 
?>

<p></p>
<?php  
$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;
?>

<p></p>
<?php  
$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;
?>

</body>
</html>
