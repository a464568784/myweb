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
	  <div class="form-group">
	    <label>新密码</label>
	    <input type="password" class="form-control" name="pwd" placeholder="新密码">
	  </div>
	  <div class="form-group">
	    <label>确认密码</label>
	    <input type="password" class="form-control" name="rePwd" placeholder="请两次密码输入一致">
	    <span id="span3">两次密码不一致！</span>
	  </div>
	  <button type="submit" class="btn btn-default" id="btn1">提交</button>
</body>
<script>
$('#span3').css({'color':'red'});
$('#span3').hide()	
$('input[name=rePwd]').blur(function(){
	l1=$('input[name=pwd]').val();
	l2=this.value;
	
	if (l1!=l2) {
		$('#span3').show()
		$(this).data({'s':0})
	} else{
		$('#span3').hide()
		$(this).data({'s':1})
	}
})

$("#btn1").click(function(){
	var tot=$('input[name=rePwd]').data('s')
	var cpwd=$('input[name=rePwd]').val();
	var tName=document.getElementsByClassName("stuName")[0].innerHTML;
	if(tot!=1){
		return false
	}else{
	  $.post("./cpwd.php", {cpwd: cpwd, tName: tName},function(d){
	  	alert(d);
	  })
	}
});
</script>
</html>