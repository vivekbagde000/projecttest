<?php

//$servername = "fruit-shopping-cart_db_1";
//$username = "id2352126_root";
//$pass = "root";
//$dbname = "project";
//	
	
	define("DB_Server" , 'localhost');
	define("DB_Username" , 'root');
	define("DB_Password" , 'root');
	define("DB_Name" , 'project');
	
	$link =  mysqli_connect(DB_Server,DB_Username,DB_Password,DB_Name);

	if(!$link){
		
		die("connection failed");
	}
	else{
			
		
	}

?>