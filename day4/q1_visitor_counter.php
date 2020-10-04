<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","") or die("connction lost");
mysqli_select_db($connect, "result" );
$find_counts=mysqli_query($connect,"SELECT * FROM user_count");
while($row=mysqli_fetch_assoc($find_counts))
{
  $current_counts=$row['counts'];
$new_count=$current_counts+1;
$update_count=mysqli_query($connect,"UPDATE user_count SET counts=$new_count");
 
}
echo $new_count."<br> ";
?>