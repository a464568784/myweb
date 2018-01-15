window.onload=function(){
	var newDate=new Date;
	var nowTime=newDate.getFullYear()+'年'+(newDate.getMonth()+1)+'月'+newDate.getDate()+'日'+(newDate.getHours())+':'+newDate.getMinutes();
	var aNowTime=document.getElementsByClassName('nowtime')[0];
	aNowTime.innerHTML=nowTime;
	document.getElementsByClassName("tesName")[0].innerHTML=getQueryString("name");
	var tName=document.getElementsByClassName("tesName")[0].innerHTML;

	$('#seeCur').click(function(){
		$('.rightInfo').load('./seeCur.php',"tName=" +tName)
	});

	$('#addRes').click(function(){
		$('.rightInfo').load('./addRes.php',"tName=" +tName)
	});

	$('#changePwd').click(function(){
		$('.rightInfo').load('./changePwd.php')
	});
}

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return decodeURI(r[2]); return null;
    };