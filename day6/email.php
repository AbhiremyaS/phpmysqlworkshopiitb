<html>
<form action ='email.php' method='POST'>
enter name :<input type='text' name='name'><br>
Enter email id:<input type='email' name='email'><br>
enter id:<input type='number' name='id'>
<input type='submit' name='submit'>
</form>
<?php

require("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$id=$_POST['id'];
if($name && $id)
{
$extract=mysqli_query($connect,"SELECT * FROM record WHERE id=$id");

while($row=mysqli_fetch_array($extract))
{
$php=$row['php'];
$html=$row['html'];
$sql=$row['mysql'];
$p=$row['percent'];
$to_email = "$email";
$subject = "feedback form";
$body="name : $name<br>id: $id<br> php :$php<br>html :$html<br>Mysql :$sql<br>percent:$p";
$headers = "From: user email";
echo $body;
mail($to_email, $subject, $body, $headers);
}
}
?>
<a href='index.php'> back </a> 
</html