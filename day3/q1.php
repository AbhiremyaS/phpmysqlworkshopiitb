<?php
require("connect.php");
error_reporting();
?>
<html>

<form action='q1.php' method='POST'>

 Name: <input type='text' name='name'><br>
 subject1:<input type= 'number'name='sub1'><br>
 subject2:<input type= 'number' name='sub2'><br>
 subject3:<input type= 'number'name='sub3'><br>
 subject4:<input type= 'number' name='sub4'><br>
 subject5:<input type= 'number' name='sub5'><br>
<input type ='submit' name='submit' value='submit'/>
</form>

<?php

if($_POST['submit'])
{
$i=$_POST['id'];
@$n=$_POST['name'];
@$s1=$_POST['sub1'];
@$s2=$_POST['sub2'];
@$s3=$_POST['sub3'];
@$s4=$_POST['sub4'];
@$s5=$_POST['sub5'];

$marks=$s1+$s2+$s3+$s4+$s5;
$tmarks=500;
$p=$marks*100/$tmarks;
if($n!="")
{
echo "$i";

$write="INSERT INTO class1 (name, sub1, sub2, sub3, sub4, sub5, totalobtained, totalmarks, percent) VALUES ('$n','$s1','$s2','$s3','$s4','$s5','$marks','$tmarks','$p')";

mysqli_query($connect,$write);

}

}

?>
</html>