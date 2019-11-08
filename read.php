<?php
require "comeon.php";

if($_SERVER["REQUEST_METHOD"]=="GET"){
	if(!empty($_GET["command"])){
		select_command($_GET["command"]);
	}
}

function select_command($com){
	if($com=="begin"){
		begin();
	}
	else if($com=="display"){
		display();
	}
}

function begin(){
	drop_table();
	create_table();
}

function display(){
	$array=array();
	$array=query_user();
	if($array!==false){
		echo json_encode($array);
	}
}

?>
