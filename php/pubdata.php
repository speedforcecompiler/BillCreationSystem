<?php
	
	require_once 'dbh.php';

	$stmt = $conn->prepare("SELECT * FROM publications ORDER BY pub_name");
	$result = $stmt->execute();

	if ($result === TRUE) 
	{
		$json = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$getjson = json_encode($json);

	}
	echo $getjson;

?>