<?php
require "comeon.php";

drop_table();

create_table();

$name = "ziyicitu";

insert_user($name);

insert_user("ziyilanhu");

if(exist_user($name)){
	echo "allll";
}
else echo "hhhhhh";


$array=array();

$array=query_user();
if($array!==false){
	while(sizeof($array)>0){
		echo array_pop($array);
	}
}
echo "oo";


?>
