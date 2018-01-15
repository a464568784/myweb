<?php 
	include '../public/common.php';
	
	$arr = $_REQUEST;  
	$addName =$arr['addName'];
	$addTime =$arr['addTime'];
	$addTes =$arr['addTes'];

	if( mysqli_query($con, "INSERT INTO sc(cur, ctime, tes) VALUES ('{$addName}', '{$addTime}', '{$addTes}')")){
		echo "添加成功！";
	}else{
		echo "添加失败！";
	}
 ?>