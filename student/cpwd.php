<?php 
	include '../public/common.php';

	$pwd=$_POST['cpwd'];
	$tName=$_POST['tName'];

	if(mysqli_query($con, "UPDATE stu SET password='{$pwd}' WHERE name='{$tName}'")){
		echo "修改成功";
	}else{
		echo "修改失败";
	}
 ?>