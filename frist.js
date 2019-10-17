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
function test(){
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("text").innerHTML=xmlhttp.responseText;
		}

	}
		xmlhttp.open("GET","login.php",true);
		xmlhttp.send();
}

