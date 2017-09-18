<?php
	
	require_once("dbh.php");

	// initializing variables with post values
	$gst = "-";
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$name = $_POST['clientname'];
	$addr = $_POST['clientaddress'];
	$gst = $_POST['gstnumber'];

	$stmt = $conn->prepare("INSERT INTO master (billnumber, day, month, year, clientname, clientaddr, gstnumber) VALUES (NULL, ?, ?, ?, ?, ?, ?)");

	$stmt->bindParam(1,$day,PDO::PARAM_STR);
	$stmt->bindParam(2,$month,PDO::PARAM_STR);
	$stmt->bindParam(3,$year,PDO::PARAM_STR);
	$stmt->bindParam(4,$name,PDO::PARAM_STR);
	$stmt->bindParam(5,$addr,PDO::PARAM_STR);
	$stmt->bindParam(6,$gst,PDO::PARAM_STR);

	$stmt->execute();
?>
	<script type="text/javascript">
		alert("Registration Successfull");
		location.href="../index.html";
	</script>
