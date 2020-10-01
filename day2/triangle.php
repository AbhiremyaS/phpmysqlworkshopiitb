<html>
<form action='triangle.php' method='GET'>
Side1:<input type='number' name='side1'><br>
Side2:<input type='number' name='side2'><br>
Side3:<input type='number' name='side3'><br>
<input type='submit' value='click here'>
</form>
</html>
<?php

@$a=$_GET['side1'];
@$b=$_GET['side2'];
@$c=$_GET['side3'];
if($a)
{

if(($a==$b)&&($b==$c))
 echo "equilateral";
else
 if(($a==$b)||($b==$c)||($a==$c))
echo "isosceles";
else
echo"scalean";
}
?>



