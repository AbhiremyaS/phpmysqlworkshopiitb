
<html>
<form action ='table.php' method='POST'>
id:<input type='number' name='id'>
<input type='submit' name='submit'>
</form>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;

font-family: monospace;
font-size: 25px;
text-align: left;
}
th {

}
tr:nth-child(even) 
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Username</th>
<th>PHP</th>
<th>HTML</th>
<th>MYSQL</th>
<th>Percentage</th>
</tr>
<?php
error_reporting(0);
$submit=$_POST['submit'];
$i=$_POST['id'];
if($submit)
{
require("connect.php");
$extract=mysqli_query($connect,"SELECT * FROM record WHERE id=$i");
if($extract>0)
{
 while($row=mysqli_fetch_assoc($extract))

 {
echo "<tr><td>" . $row['id']. "</td><td>" . $row['name'] . "</td><td>"
. $row['username']. "</td><td>" . $row['php'] . "</td><td>". $row['html'] . "</td><td>". $row['mysql'] . "</td><td>". $row['percent'] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
}
?>
</table>
<a href='email.php'> email </a><br>
<a href='index.php'> back </a>
</body>
</html>