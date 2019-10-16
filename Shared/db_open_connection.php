<?php
	$db_host='localhost';
	$db_user='root'; //'restaurantAdmin';
	$db_pwd=''; //'resadmin123';
	$db_name='restaurant';
	//$db_port= 8080;
	
	//To establish connection
	$connection= new mysqli( $db_host,$db_user, $db_pwd, $db_name);
	//$connection= mysql_connect( $db_host,$db_user, $db_pwd);
	//$db = mysql_select_db($db_name, $connection);

	//To check connection
	if (mysqli_connect_error()) {
    		die("Database connection failed: " . mysqli_connect_error());
		}
	
?>