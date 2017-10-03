<!DOCTYPE html>
<html>
<head>
	<title>CLIENTS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- For responsive Design -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Enterprise</a>
			</div>
				<ul class="nav navbar-nav">
				<li><a href="index.html">HOME</a></li>
				<li><a href="publications.php">PUBLICATIONS</a></li>
				<li class="active"><a href="clients.php">CLIENT INFORMATION</a></li>
				<li><a href="format.php">RELEASE ORDER</a></li>
				<!-- <li><a href="#">Page 3</a></li> -->
			</ul>
		</div>
	</nav>

	<div class="container">
		<form method="POST">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-5 form-group">
					<input type="" name="client_name" class="form-control" placeholder="Client name" style="text-transform: uppercase;">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-5 form-group">
					<input type="text" name="client_gst" class="form-control" placeholder="client GST number" style="text-transform: uppercase;">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-5 form-group">
					<textarea class="form-control" style="text-transform: uppercase;">client address</textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-5 form-group">
					<input type="text" name="client_contact" class="form-control" placeholder="CLIENT CONTACT NUMBER" style="text-transform: uppercase;">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-5 form-group">
					<input type="email" name="client_email" class="form-control" placeholder="client email" style="text-transform: uppercase;">
				</div>
			</div>
		</form>
	</div>
</body>	
</html>