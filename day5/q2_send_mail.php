<html>
<form action='q2_send_mail.php' method='POST'>
Enter Name:<input type='text' name='name'><br>
Enter email id:<input type='email' name='email'><br>
Feedback:<input type='text' name='feedback'><br>
<input type='submit' name='submit' value='submit'>
</form>
<?php
error_reporting(0);
$name=$_POST['name'];
$email=$_POST['email'];
$f=$_POST['feedback'];
$submit=$_POST['submit'];
$to_email = "receipient@gmail.com";
$to_e="admin@gmail.com";
$subject = "feedback form";
$sub="feedback form";
$body = "Thank you, $name for the feedback";
$b="name : $name<br>email: $email<br>feedback:$f";
$headers = "From: user email";
$h="From: receipient@gnail.com";
if($submit)
{
  mail($to_email, $subject, $body, $headers);
  mail($to_e, $sub, $b, $h);
  
}


?>
</html>