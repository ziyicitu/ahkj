<?php
function create_link_mysql(){
	$dir_json_flie=__DIR__."/config.json";
$json_string = file_get_contents($dir_json_flie);
$data = json_decode($json_string,true);
$dbhost = $data["host"];
$dbuser = $data["user"];
$dbpassword = $data["password"];
$conn = new mysqli($dbhost,$dbuser,$dbpassword);
if($conn -> connect_error)
{
	return false;
}
return $conn;
}
?>
