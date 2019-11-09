<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
	if(empty($_GET["name"])){
		echo "4";
		exit;
	}
}

require "link_mysql.php";

$conn=create_link_mysql();
mysqli_select_db($conn,"ahkj");

$name=$_GET["name"];

$sql="select * from randomname where name='$name';";

$result=$conn->query($sql);

if($result->num_rows>0){
	echo "5";
	exit;
};

$sql="insert into randomname (name) value ('$name')";

$result=$conn->query($sql);

if(!$result){
	die("6");
}

echo "1";
?>

