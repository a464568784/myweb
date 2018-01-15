<?php 
	include '../public/common.php';
	$tName=$_GET['tName'];
	$result = mysqli_query($con,"SELECT * FROM cur where cTes='{$tName}'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table class="table table-bordered">
		<tr><th>课程</th><th>学生</th><th>成绩</th><th>修改</th><th>删除</th></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr><td><?php echo $row['cName']; ?></td><td><?php echo $row["cStu"]; ?></td><td><?php echo $row["cRes"] ?></td><td><a href="#" class="change">修改</a></td><td><a href="#" class="del">删除</a></td></tr>
		<?php 
			}
		 ?>
	</table>
	<form id="changeform">
		<div class="form-group">
	    <label>课程名</label>
	    <input type="text" class="form-control" name="changeName" readonly="value">
	    </div>
	  <div class="form-group">
	    <label>学生</label>
	    <input type="text" class="form-control" name="changeStu" readonly="value">
	  </div>
	  <div class="form-group">
	    <label>成绩</label>
	    <input type="text" class="form-control" name="changeRes">
	  </div>
	  <button type="submit" class="btn btn-default" id="changeBtn">提交</button>
	</form>
</body>
<script>
$("input[name='changeName']").val("");
$("input[name='changeStu']").val("");
$("input[name='changeRes']").val("");
$('#changeform').hide()

$('.change').click(function(){
	var cName=$(this).parent().parent().children().eq(0).html();
	var cStu=$(this).parent().parent().children().eq(1).html();
	var cRes=$(this).parent().parent().children().eq(2).html();
	$('#changeform').show();
	$("input[name='changeName']").val(cName);
	$("input[name='changeStu']").val(cStu);
	$("input[name='changeRes']").val(cRes);
	
});

var fm=document.getElementsByTagName('form')[0];
fm.onsubmit=function(evt){
	if($('input[name=changeRes]').val()==""){
		alert("请输入成绩");
		return false;
	}else{
	var fmData=new FormData(fm);
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4&&xhr.status==200){
			alert(xhr.responseText);
		}
	}
	xhr.open("POST","./changeRes.php");
	xhr.send(fmData);
	evt.preventDefault();}
}

$('.del').click(function(){
var thisHide=$(this).parent().parent();
var delName=$(this).parent().parent().children().eq(0).html();
var delStu=$(this).parent().parent().children().eq(1).html();
var delRes=$(this).parent().parent().children().eq(2).html();

$.get("./delRes", { delName: delName, delStu: delStu,delRes: delRes },function(){
		thisHide.hide();
} );
})			
</script>
</html>