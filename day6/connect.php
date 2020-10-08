<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","") or die("connction lost");
mysqli_select_db($connect, "student" );


?>