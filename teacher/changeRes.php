<?php 
	include '../public/common.php';

	$arr = $_REQUEST;  
	$cName =$arr['changeName'];
	$cStu =$arr['changeStu'];
	$cRes =$arr['changeRes'];

	if(mysqli_query($con, "UPDATE cur SET cRes='{$cRes}' WHERE cName='{$cName}' AND cStu='{$cStu}'")){
		echo "修改成功！";
	}else{
		echo "修改失败！";
	}
 ?>