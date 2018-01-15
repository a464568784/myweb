<?php
include '../public/common.php';
$result = mysqli_query($con,"SELECT * FROM tes");
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../public/bs/css/bootstrap.min.css"/>
		<script src="../public/bs/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../public/bs/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<table class="table table-bordered">
			<tr><th>编号</th><th>用户名</th><th>密码</th><th>修改</th><th>删除</th></tr>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr><td><?php echo $row['id']; ?></td><td><?php echo $row["name"]; ?></td><td><?php echo $row["password"] ?></td><td><a href="#" class="change">修改</a></td><td><a href="#" class="del">删除</a></td></tr>
			<?php 
				}
			 ?>
		</table>
		<form id="changeform">
			<div class="form-group">
		    <label>ID</label>
		    <input type="text" class="form-control" name="changeId" readonly="true">
		    </div>
		  <div class="form-group">
		    <label>用户名</label>
		    <input type="text" class="form-control" name="changeName">
		  </div>
		  <div class="form-group">
		    <label>密码</label>
		    <input type="password" class="form-control" name="changePwd">
		  </div>
		  <button type="submit" class="btn btn-default" id="changeBtn">提交</button>
		</form>
	</body>
	<script>
		$("input[name='changeId']").val("");
		$("input[name='changeName']").val("");
		$("input[name='changePwd']").val("");
		$('#changeform').hide()

		$('.change').click(function(){
			var cId=$(this).parent().parent().children().eq(0).html();
			var cName=$(this).parent().parent().children().eq(1).html();
			var cPwd=$(this).parent().parent().children().eq(2).html();
			$('#changeform').show();
			$("input[name='changeId']").val(cId);
			$("input[name='changeName']").val(cName);
			$("input[name='changePwd']").val(cPwd);
		});
		
		var fm=document.getElementsByTagName('form')[0];
		fm.onsubmit=function(evt){
			if($('input[name=changeName]').val()==""){
				alert("姓名不能为空");
				return false;
			}else if($('input[name=changePwd]').val()==""){
				alert("请输入密码");
				return false;
			}else{
			var fmData=new FormData(fm);
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4&&xhr.status==200){
					alert(xhr.responseText);
				}
			}
			xhr.open("POST","./changeT.php");
			xhr.send(fmData);
			evt.preventDefault();}
		}	
	</script>
</html>
