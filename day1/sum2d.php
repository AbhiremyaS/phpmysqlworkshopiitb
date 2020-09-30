<?php
$sum=array( 
array(0,0),
array(0,0));
$a=array( 
array(1,2),
array(5,4));
$b=array(
array(3,4),
array(7,1));
for($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
   {	echo $a[$i][$j]."  ";
   }
echo"<br>";
}
echo"<br>";
for($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
   {	echo $b[$i][$j]."  ";
   }
echo"<br>";
}
echo"<br>";

for($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
   {	$sum[$i][$j]=$a[$i][$j]+$b[$i][$j];
   }
}
for($i=0;$i<2;$i++)
{
  for ($j=0;$j<2;$j++)
   {	echo $sum[$i][$j]."  ";
   }
echo"<br>";
}
?>