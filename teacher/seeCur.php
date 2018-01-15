<?php 
	include '../public/common.php';
	$tName=$_GET['tName'];
	$result = mysqli_query($con,"SELECT * FROM cur where cTes='{$tName}'");
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
	<table class="table table-bordered">
		<tr><th>课程</th><th>开课时间</th><th>选课学生</th></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr><td><?php echo $row["cName"]; ?></td><td><?php echo $row["cTime"]; ?></td><td><?php echo $row["cStu"] ?></td></tr>
		<?php 
			}
		 ?>
	</table>
 </body>
 </html>