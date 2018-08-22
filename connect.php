<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="testDB";
	
	$conn = new msqli($server, $user, $password);
	
	if($conn->connection_error){

		die("connection failed".connection_error);

	}
	echo "connected";
?>
