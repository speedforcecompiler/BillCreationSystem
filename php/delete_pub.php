<?php
	
	require_once 'dbh.php';
	$var = $_POST['paper'];
	$stmt = $conn->prepare("DELETE FROM publications WHERE pub_name=?");
	foreach ($var as $key) {
		$stmt->bindParam(1,$key);
		$stmt->execute();
	}

	echo "<script type='text/javascript'> alert('SELECTIONS DELETED')</script>";
	header("location: ../publications.php");
?>