<?php
include './public/common.php';

$id=$_POST["userId"];
$pwd=$_POST["passWord"];
$sta=$_POST["selectSta"];
$url="";
if($sta=="admin"){
	$url="./admin/index.html";
}else if($sta=="tes"){
	$url="./teacher/index.html";
}else{
	$url="./student/index.html";
};

$check="select id,password,name from $sta where id = '$id' and password = '$pwd'";
$result = mysqli_query($con,$check);  
$num = mysqli_num_rows($result);
if($num)  
    {  	
       $row = mysqli_fetch_array($result);
       header("Location: $url?name=$row[name]");
    }  
    else  
    {   
    	echo '<script langugae="JavaScript">;alert("用户名或密码不正确！");location.href="./login.html";</script>;';
    }  ;
?>