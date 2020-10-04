
<?php
error_reporting();
?>

<html>

<form action='q2_string_functions.php' method='POST'>
 <input type='text' name='string'><br>
<input type='submit' name='submit' value='submit'/>
</form>


<?php
if(@$_POST['submit'])
{
$s=$_POST['string'];
$len=strlen("$s");
echo "no. of characters= $len<br>";
$e=explode(" ",$s);
echo "breaking down a string into an array $e[1]<br>";
$rev=strrev("$s");
echo "reversed string is : $rev<r>";
$l=strtolower("$s");
$u=strtoupper("$s");
echo"to lower :$l<br>";
echo "to upper :$u<br>";
$replace="hurray";
$result=substr_replace($s,$replace,5,9);
echo $result;
}
?>
</html>