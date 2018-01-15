<?php 
	include '../public/common.php';

	$pwd=$_POST['cpwd'];
	$tName=$_POST['tName'];

	mysqli_query($con, "UPDATE tes SET password='{$pwd}' WHERE name='{$tName}'");
 ?>