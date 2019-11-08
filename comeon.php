<?php
require "link_mysql.php";

function create_table(){
	$conn = create_link_mysql();
	mysqli_select_db($conn,"ahkj");

	$sql = "create table randomname(id int auto_increment primary key,name char(60))";

	if($conn->query($sql) === true){
		echo "successfully";
	}
	else {
		echo "failed";
	}
}

function drop_table(){
	$conn = create_link_mysql();
	mysqli_select_db($conn,"ahkj");

	$sql = "drop table randomname";

	if($conn->query($sql) === true){
		echo "successfully";
	}
	else {
		echo "failed";
	}
}

function query_user(){
	$conn = create_link_mysql();
	mysqli_select_db($conn,"ahkj");

	$sql = "select * from randomname";
	
	$result = $conn->query($sql);
	
	$array = array();

	if($result->num_rows>0){
		while($row=mysqli_fetch_assoc($result)){
			array_push($array,$row["name"]);
		}
		return $array;
	}
	else {
		return false;
	}
}

function insert_user($name){
	$conn = create_link_mysql();
	mysqli_select_db($conn,"ahkj");

	$sql="insert into randomname (name) value ('$name')";

	$result=$conn->query($sql);

	if(!$result){
		die("fail");
	}
	echo "successfully";
}

function exist_user($name){
	$conn = create_link_mysql();
	mysqli_select_db($conn,"ahkj");

	$sql = "select * from randomname where name ='$name';";

	$result=$conn->query($sql);

	if($result->num_rows>0){
		return true;
	}
	else return false;
}


function user_number(){
	$conn = create_link_mysql();
	mysqli_select_db($conn,"ahkj");

	$sql = "select * from randomname";
	
	$result = $conn->query($sql);

	return $result->num_rows;
}
	

