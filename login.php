<?php
$json_string = file_get_contents("config.json");
$data = json_decode($json_string,true);
$dbhost = $data[host];
$dbuser = $data[user];
$dbpassword = $data[password];
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword);
if($conn != null)
{
	echo "yes";
}
else
echo "no";
?>
