
<html>
<?php
error_reporting(0);
$name=$_POST['username'];
$password=$_POST['password'];
if($name && $password)
{
require("connect.php");
echo"<a href='table.php'> marksheet? </a><br>";
echo"<a href='email.php'> email? </a>";

}
else 
echo"enter password or username";

?>
</html>