<?php
error_reporting(0);
       echo "<h1> Register</h1>";
	?>

	<html>

	<form action='register.php' method='POST'>
	
		<table>
			<tr>
			<td>Your full name : </td>
			
			<td><input type='text' name='fullname'></td>
			</tr>
			
			<tr>
			<td>Choose a username :  </td>
			
			<td><input type='text' name='username'></td>
			</tr>

			<tr>
			<td>Choose a password :  </td>
			
			<td><input type='password' name='password'></td>
			</tr>

			<tr>
			<td>Repeat your password :  </td>
			
			<td><input type='password' name='repeatpassword'></td>
			</tr>
			<p>
			<input type='submit' name='submit' value='Register'>
			
			
		</table>
		
			
	
	</form>
<?php
$name=$_POST['fullname'];
$username=$_POST['username'];
$p=$_POST['password'];
$repeatp=$_POST['repeatpassword'];
$submit=$_POST['submit'];
if($submit)
{
  if($name && $p && $repeatp )
  {
    if($p==$repeatp)
   {
     require("connect.php");
   
     $write="INSERT INTO record (name,username,password ) VALUES ('$name','$username','$p')";

      mysqli_query($connect,$write);
   }
  else 
  echo "please enter correct passwors";
  }
  else
echo" enter all feilds";
}

?>
	<a href='index.php'> back? </a>

	
	</html>

