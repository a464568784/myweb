<?php 
	include '../public/common.php';

	$delN=$_GET['delName'];
	$delS=$_GET['delStu'];
	$delR=$_GET['delRes'];

	mysqli_query($con, "delete from cur where cName='{$delN}' AND cStu='{$delS}' AND cRes='{$delR}'");
 ?>