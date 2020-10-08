<html>

<form action='update.php' method='POST'>
enter name :<input type='text' name='name'><br>
php marks:<input type='number' name='php'><br>
html marks:<input type='number' name='html'><br>
My sql marks:<input type='number' name='mysql'><br>
<input type='submit' name='submit' value='submit'>
</form>
<?php
require("connect.php");
$name=$_POST['name'];
$php=$_POST['php'];
$html=$_POST['html'];
$sql=$_POST['mysql'];
$c=0;
$percent=($php+$html+$sql)*100/300;
if($name && $php && $html && $sql)
{
$extract=mysqli_query($connect,"SELECT * FROM record ");

while($row=mysqli_fetch_array($extract))
{
$dbname=$row['name'];
$username=$row['username'];
//$password=$row['password'];
echo"<br>$dbname";
  if($name==$dbname)
  {
   $a="UPDATE record SET php=$php,html=$html,mysql=$sql,percent = $percent WHERE name='$name'";
   mysqli_query($connect,$a); 
  }

  else
  $c++;
}
if($c!=0)
echo " student with that name doesnot exist";
}
?>
<a href='admin.php'> admin </a> 
</html>