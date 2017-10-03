<?php
	
	$username = "root";
	$password = "root";
	$server = "localhost";
	$dbname = "enterprise";

	try{
		$conn = new PDO("mysql:host=$server;dbname=$dbname",$username, $password);
		 // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    // echo "Connected successfully";
	}catch(PDOException $e){
		echo "Sorry Could not connect to database";
	}
?>	
