<?php
include '../public/common.php';
$result = mysqli_query($con,"SELECT * FROM sc");
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
			<tr><th>课程名</th><th>开课时间</th><th>授课老师</th></tr>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr><td><?php echo $row['cur']; ?></td><td><?php echo $row["ctime"]; ?></td><td><?php echo $row["tes"] ?></td></tr>
			<?php 
				}
			 ?>
		</table>
	</body>
</html>
