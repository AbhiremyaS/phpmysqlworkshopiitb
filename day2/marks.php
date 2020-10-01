<html>
<form action='marks.php' method ='POST'>
Name:<input type='text' name='name1'><br>
Subject1:<input type='number' name='subj1'><br>
Subject2:<input type='number' name='subj2'><br>
Subject3:<input type='number' name='subj3'><br>
Subject4:<input type='number' name='subj4'><br>
Subject5:<input type='number' name='subj5'><br>

<input type='submit' name='click here'>
</form>
</html>
<?php
@$a=$_POST['name1'];
@$b=$_POST['subj1'];
@$c=$_POST['subj2'];
@$d=$_POST['subj3'];
@$e=$_POST['subj4'];
@$f=$_POST['subj5'];
$marks=$b+$c+$d+$e+$f;
$tmarks=500;
$per=($marks*100)/$tmarks;
if($a)
{
echo "name of the student : ".$a."<br>";
echo "subject 1: ".$b."<br>";
echo "subject 2: ".$c."<br>";
echo "subject 3: ".$d."<br>";
echo "subject 4: ".$e."<br>";
echo "subject 5: ".$f."<br>";
echo "Total marks obtained: ".$marks."<br>";;
echo "Total marks:  ".$tmarks."<br>";;
echo "Percentage: ".$per;


}


?>