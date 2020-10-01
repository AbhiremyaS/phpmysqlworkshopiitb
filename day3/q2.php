<?php
require("connect.php");
$sub5=99;
$d="UPDATE class1 SET sub5 = $sub5 WHERE name='rohan'";
mysqli_query($connect,$d);
 $extract=mysqli_query($connect,"SELECT sub1,sub2,sub3,sub4,sub5 FROM class1 WHERE name='rohan'");

while($row=mysqli_fetch_array($extract))
{
$s1=$row['sub1'];
$s2=$row['sub2'];
$s3=$row['sub3'];
$s4=$row['sub4'];
$s5=$row['sub5'];
}
$marks=$s1+$s2+$s3+$s4+$s5;
$tmarks=500;
$p=$marks*100/$tmarks;
$a="UPDATE class1 SET percent = $p,totalobtained=$marks WHERE name='rohan'";
mysqli_query($connect,$a);
	
?>