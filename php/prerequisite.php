<?php
	require_once "dbh.php";

	$stmt = $conn->prepare("SELECT * FROM release_orders ORDER BY ro_number DESC LIMIT 1");
	$result = $stmt->execute();

	if($result){
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$json_row = json_encode($row);
	}

	echo $json_row;
?>