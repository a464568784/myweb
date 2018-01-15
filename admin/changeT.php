<?php 
	include '../public/common.php';
	
	$arr = $_REQUEST;  
	$cId =$arr['changeId'];
	$cName =$arr['changeName'];
	$cPwd =$arr['changePwd'];
	
	if(mysqli_query($con, "UPDATE tes SET name='{$cName}',password='{$cPwd}' WHERE id='{$cId}'")){
		echo "修改成功！";
	}else{
		echo "修改失败！";
	}
 ?>