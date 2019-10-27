var xmlhttp;
window.onload=function(){
	init_xmlhttp();
}
function init_xmlhttp(){
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiceXObject("Microsoft.XMLHTTP");
	}
}
function wait_xmlhttp_return(somefunction){
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			somefunction(xmlhttp.responseText);
		}
	}
}
function test(){
	var username=document.getElementById("userName");
	var password=document.getElementById("password");
	xmlhttp.open("post","regin.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("username="+username.value+"&password="+password.value);
	wait_xmlhttp_return(function(xmlhttp_return){
		printf_log(xmlhttp_return);
	});
}

function printf_log(log_date){
	document.getElementById("text").innerHTML+=log_date+"<br>";
}
function login(){
	var login_userName=document.getElementById("userName");
	var login_password=document.getElementById("password");
	printf_log(login_userName.value);
	printf_log(login_password.value);
	return false;
}

