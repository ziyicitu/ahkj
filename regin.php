<?php
require "link_mysql.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["username"])||empty($_POST["password"])){
		echo "noooo!";
		exit();
	}
}

$user = $_POST["username"];
$password = $_POST["password"];

if(!(preg_match("/^[a-zA-Z0-9]",$user)||preg_match("/^[a-zA-Z0-9]",$password))){
	die("heheheh");
}
	

$conn=create_link_mysql();
mysqli_select_db($conn, "ahkj");

$sql = "select * from user where username='".$user."';";

$result = $conn->query($sql);

if($result->num_rows > 0){
	echo "already have";
}
else insert_user();

function insert_user(){
	global $user,$password,$conn;
	$sql = "insert into user (username, password) value ('".$user."','".$password."');";
	if(!mysqli_query($conn,$sql)){
		die('0'.mysqli_error($conn));
	}
	echo "1";
}
mysqli_close($conn);
?>
