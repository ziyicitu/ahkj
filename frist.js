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
	xmlhttp.open("GET","login.php",true);
	xmlhttp.send();
	wait_xmlhttp_return(function(xmlhttp_return){
		document.getElementById("text").innerHTML=xmlhttp_return;
	});
}
