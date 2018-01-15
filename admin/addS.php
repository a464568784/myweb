<?php 
	include '../public/common.php';
	
	$arr = $_REQUEST;  
	$addId =$arr['addId'];
	$addName =$arr['addName'];
	$addPwd =$arr['addPwd'];
	
	if(mysqli_query($con, "INSERT INTO stu(id, name, password) VALUES ('{$addId}', '{$addName}', '{$addPwd}')")){
		echo "添加成功！";
	}else{
		echo "添加失败！";
	}
 ?>