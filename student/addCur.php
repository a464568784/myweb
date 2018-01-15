<?php 
	include '../public/common.php';

	$adds=$_GET['sName'];
	$addt=$_GET['tName'];
	$addTime=$_GET['sTime'];
	$addTes=$_GET['sTes'];

	if(mysqli_query($con, "INSERT INTO cur(cName, cTime, cTes, cStu) VALUES ('{$adds}','{$addTime}','{$addTes}','{$addt}')")){
		echo "选课成功!";
	}else{
		echo "选课失败,请勿重复选课!";
	}

 ?>