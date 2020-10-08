<html>

<form action='admin.php' method='POST'>
Username: <input type='text' name='username'><br>
Password: <input type='password' name='password'><br>
<input type='submit' name='Log in'>
</form>

<?php
error_reporting(0);
$name=$_POST['username'];
$password=$_POST['password'];
$submit=$_POST['submit'];
if($name && $password)
{
  $originalusername="admin1";
  $p="123";
  if($originalusername==$name && $password== $p)
   {
	echo" <a href='update.php'> update</a><br>";
        echo" <a href='delete.php'> delete</a>";
        

   }
else
echo"only admins can access"; 
}
else
echo" no submit";


echo"<a href='index.php'> back </a>";  
?>
</html>
