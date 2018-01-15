<?php
include '../public/common.php';
$teName = mysqli_query($con,"SELECT * FROM tes");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../public/bs/css/bootstrap.min.css"/>
	<script src="../public/bs/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../public/bs/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<form>
		  <div class="form-group">
		    <label>课程名</label>
		    <input type="text" class="form-control" name="addName" placeholder="课程名">
		  </div>
		  <div class="form-group">
		    <label>开课时间</label>
		    <input type="text" class="form-control" name="addTime" placeholder="开课时间">
		  </div>
		  <div class="form-group">
		    <label>任课教师</label>
		    <select name="addTes">
			<?php
			while ($row = mysqli_fetch_assoc($teName)) {
			?>
			<option><?php echo $row['name']; ?></option>
			<?php 
				}
			 ?>
			</select>
		  </div>
		  <button type="submit" class="btn btn-default">提交</button>
		  <button type="reset" class="btn btn-default">清空</button>
	</form>
</body>
</html>