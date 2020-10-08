<html>

<form action='delete.php' method='POST'>
enter name :<input type='text' name='name'><br>
enter id::<input type='number' name='id'><br>

<input type='submit' name='submit' value='submit'>
</form>
<?php
require("connect.php");
$name=$_POST['name'];
$id=$_POST['id'];

$c=0;

if($name && $id)
{
$extract=mysqli_query($connect,"SELECT * FROM record ");

while($row=mysqli_fetch_array($extract))
{
$dbname=$row['name'];
$dbid=$row['id'];
//$password=$row['password'];
echo"<br>$dbname";
  if($name==$dbname && $id==$dbid)
  {
   $a="DELETE FROM `record` WHERE id=$dbid";
   mysqli_query($connect,$a); 
  }

  else
  $c=$c+1;
}
if($c!=0)
echo " student with that name and id doesnot exist";
}
?>
</html>