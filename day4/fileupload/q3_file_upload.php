       <?php
error_reporting();

	$name= $_FILES["myfile"]["name"];
	$type= $_FILES["myfile"]["type"];
	$size= $_FILES["myfile"]["size"];
	$temp= $_FILES["myfile"]["tmp_name"];
	$error= $_FILES["myfile"]["error"];
    if($error>0)
	die("error uploading");
    else
	{move_uploaded_file($temp,"uploaded/".$name);
          echo "$name<br>";
	  echo "$type<br>";
	  echo"$size<br>";
        } 	

	?>