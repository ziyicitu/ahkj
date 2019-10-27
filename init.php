<?php
echo "okk:";
function check_database_login($in_data){
$conn = mysqli_connect($in_data["host"],$in_data["user"],$in_data["password"]);
if(!$conn)
{
	return false;
}
else
{
	mysqli_close($conn);
	return true;
}
function create_config_file($in_data){
	$json_string=json_encode($in_data);
	file_put_contents("config.json",$json_string);
}
function check_config_file(){
	if(file_exists("config.json"){
		$json_string=file_get_contents("config.json");
		$data=json_decode($json_string,true);
		if(!check_database_login($data))return false;
	}
	else return false;
}
?>
