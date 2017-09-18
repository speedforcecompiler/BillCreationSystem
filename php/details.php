<?php 
	
	require_once("dbh.php");

	$name = $_GET['name'];

	$stmt = $conn->prepare("SELECT * FROM master WHERE clientname like :clientname");
	
	$check = $stmt->execute([
			":clientname" => $name."%"
		]);

	if($check){
		$row = $stmt->fetch(PDO::FETCH_ASSOC); 
	}

	echo json_encode($row);

 ?>