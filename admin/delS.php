<?php 
	include '../public/common.php';

	$id=$_GET["delid"];
 	mysqli_query($con,"delete from stu where id='{$id}'");

 ?>
 