window.onload=function(){
	var newDate=new Date;
	var nowTime=newDate.getFullYear()+'年'+(newDate.getMonth()+1)+'月'+newDate.getDate()+'日'+(newDate.getHours())+':'+newDate.getMinutes();
	var aNowTime=document.getElementsByClassName('nowtime')[0];
	aNowTime.innerHTML=nowTime;
	
	$('.list-group-item.active').nextAll().hide();
	$('.list-group-item.active').click(function(){
		$('.list-group-item.active').nextAll().hide();
		$(this).nextAll().show();
	});
	
	$('#addAdmin').click(function(){
		$('.rightInfo').load('addAdmin.php',function(){
		var fm=document.getElementsByTagName('form')[0];
		fm.onsubmit=function(evt){
			if($('input[name=addId]').val()==""){
				alert("ID不能为空");
				return false;
			}
			else if($('input[name=addName]').val()==""){
				alert("姓名不能为空");
				return false;
			}else if($('input[name=addPwd]').val()==""){
				alert("请输入密码");
				return false;
			}else{
			var fmData=new FormData(fm);
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4&&xhr.status==200){
					alert(xhr.responseText)
				}
				
			}
			xhr.open("POST","./addA.php");
			xhr.send(fmData);
			evt.preventDefault();}
		}});
	});
	$('#changeAdmin').click(function(){
		$('.rightInfo').load('changeAdmin.php',function(){
			$('.del').click(function(){
			var thisid=$(this).parent().parent();
			var delid=$(this).parent().parent().children().eq(0).html();
			$.ajax({
			   type: "GET",
			   url: "./delA.php",
			   data: "delid=" + delid,
			   dataType:"TEXT",
			   success: function(){
			   	thisid.hide();
			   }
			});
		})
		});
	});	

	
	$('#addTes').click(function(){
		$('.rightInfo').load('addAdmin.php',function(){
		var fm=document.getElementsByTagName('form')[0];
		fm.onsubmit=function(evt){
			if($('input[name=addId]').val()==""){
				alert("ID不能为空");
				return false;
			}
			else if($('input[name=addName]').val()==""){
				alert("姓名不能为空");
				return false;
			}else if($('input[name=addPwd]').val()==""){
				alert("请输入密码");
				return false;
			}else{
			var fmData=new FormData(fm);
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4&&xhr.status==200){
					alert(xhr.responseText)
				}
				
			}
			xhr.open("POST","./addT.php");
			xhr.send(fmData);
			evt.preventDefault();}
		}});
	});

	$('#changeTes').click(function(){
		$('.rightInfo').load('changeTes.php',function(){
			$('.del').click(function(){
			var thisid=$(this).parent().parent();
			var delid=$(this).parent().parent().children().eq(0).html();
			$.ajax({
			   type: "GET",
			   url: "./delT.php",
			   data: "delid=" + delid,
			   dataType:"TEXT",
			   success: function(){
			   	thisid.hide();
			   }
			});
		})
		});
	});	

	$('#addStu').click(function(){
		$('.rightInfo').load('addAdmin.php',function(){
		var fm=document.getElementsByTagName('form')[0];
		fm.onsubmit=function(evt){
			if($('input[name=addId]').val()==""){
				alert("ID不能为空");
				return false;
			}
			else if($('input[name=addName]').val()==""){
				alert("姓名不能为空");
				return false;
			}else if($('input[name=addPwd]').val()==""){
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
			xhr.open("POST","./addS.php");
			xhr.send(fmData);
			evt.preventDefault();}

		}});
	});


	$('#changeStu').click(function(){
		$('.rightInfo').load('changeStu.php',function(){
			$('.del').click(function(){
			var thisid=$(this).parent().parent();
			var delid=$(this).parent().parent().children().eq(0).html();
			$.ajax({
			   type: "GET",
			   url: "./delS.php",
			   data: "delid=" + delid,
			   dataType:"TEXT",
			   success: function(){
			   	thisid.hide();
			   }
			});
		})
		});
	});	

	$('#addCur').click(function(){
		$('.rightInfo').load('addCourse.php',function(){
		var fm=document.getElementsByTagName('form')[0];
		fm.onsubmit=function(evt){
			if($('input[name=addName]').val()==""){
				alert("课程名不能为空");
				return false;
			}else if($('input[name=addTime]').val()==""){
				alert("开课时间不能为空");
				return false;
			}else{
			var fmData=new FormData(fm);
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4&&xhr.status==200){
					alert(xhr.responseText);
				}
				
			}
			xhr.open("POST","./addC.php");
			xhr.send(fmData);
			evt.preventDefault();}
		}});
	});

	$('#seeCur').click(function(){
		$('.rightInfo').load('changeCur.php');
	})
}
