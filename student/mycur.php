<?php 
	include '../public/common.php';
	$tName=$_GET['tName'];
	$result = mysqli_query($con,"SELECT * FROM cur where cStu='{$tName}'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table class="table table-bordered">
		<tr><th>学期</th><th>课程名</th><th>授课教师</th><th>成绩</th></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr><td><?php echo $row['cTime']; ?></td><td><?php echo $row["cName"]; ?></td><td><?php echo $row["cTes"] ?></td><td><?php echo $row["cRes"] ?></td></tr>
		<?php 
			}
		 ?>
	</table>
</body>