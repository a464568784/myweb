<?php 
	include '../public/common.php';
	$tName=$_GET['tName'];
	$result = mysqli_query($con,"SELECT * FROM sc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table class="table table-bordered">
		<tr><th>学期</th><th>课程名</th><th>授课教师</th><th>选择</th></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr><td><?php echo $row['ctime']; ?></td><td><?php echo $row["cur"]; ?></td><td><?php echo $row["tes"] ?></td><td><a href="#" class="sel">选择</a></td></tr>
		<?php 
			}
		 ?>
	</table>
	<hr>
	  <div class="form-group">
	    <label>学期</label>
	    <input type="text" class="form-control" name="sTime" readonly="value">
	  </div>
	  <div class="form-group">
	    <label>课程名</label>
	    <input type="text" class="form-control" name="sName" readonly="value">
	  </div>
	  <div class="form-group">
	    <label>授课教师</label>
	    <input type="text" class="form-control" name="sTes" readonly="value">
	  </div>
	  <button type="submit" class="btn btn-default" id="selBtn">选择</button>
</body>
<script>
	var tName=document.getElementsByClassName("stuName")[0].innerHTML;

	$("input[name='sTime']").val("");
	$("input[name='sName']").val("");
	$("input[name='sTes']").val("");
	$('.sel').click(function(){
		var sTime=$(this).parent().parent().children().eq(0).html();
		var sName=$(this).parent().parent().children().eq(1).html();
		var sTes=$(this).parent().parent().children().eq(2).html();

		$("input[name='sTime']").val(sTime);
		$("input[name='sName']").val(sName);
		$("input[name='sTes']").val(sTes);

	})

	$(":button").click(function(){
		var sName=$("input[name='sName']").val();
		var sTime=$("input[name='sTime']").val();
		var sTes=$("input[name='sTes']").val();
		$.get("./addCur.php", { sName: sName, tName: tName, sTime: sTime, sTes: sTes},function(d){
				alert(d)
		} );
	})

</script>