<?php 

	require_once 'dbh.php';

	$name = $_POST['publication'];
	$name = strtoupper($name);
	$stmt = $conn->prepare("INSERT INTO publications (pub_name) VALUES (?)");
	$stmt->bindParam(1,$name);

	$result = $stmt->execute();

	if ($result === TRUE)
	{
		?>
		<script type="text/javascript">
			alert("REGISTRATION SUCCESSFULL");
			window.location("../publications.php");
		</script>
		<?php	
		header("location: ../publications.php");
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("REGISTRATION UNSUCCESSFULL!");
		</script>
		<?php	
	}
?>