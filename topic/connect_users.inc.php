<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_select = "users";
	$dbconnect = "mysql:host=".$db_host.";dbname=".$db_select.";charset=UTF8";
	 
	try 
	{
		$dbgo = new PDO($dbconnect, $db_user, $db_pass);
	}
	catch(PDOException $e)
	{
		$dbgo->rollback();
		echo "Error: " . $e->getMessage();
	}
	   
?>