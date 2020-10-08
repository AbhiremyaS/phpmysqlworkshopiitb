<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","") or die("connction lost");
mysqli_select_db($connect, "data1" );

?>
<html>
<form action='q1_md5.php' method='POST'>
username:<input type='text' name='name' ><br>
password:<input type='text' name='password'><br>
<input type='submit' name='submit' value='submit'>
</form>

<?php
if($_POST['submit'])
{
$n=$_POST['name'];
$p=$_POST['password'];
$pmd5=md5($p);


$write="INSERT INTO data (username,password) VALUES ('$n','$pmd5')";
mysqli_query($connect,$write);

}

?>
</html>
