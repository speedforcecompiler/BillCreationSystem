<!DOCTYPE html>
<html>
<head>
	<title>FORMAT</title>
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
				<li><a href="clients.php">CLIENT INFORMATION</a></li>
				<li class="active"><a href="format.php">RELEASE ORDER</a></li>
				<!-- <li><a href="#">Page 3</a></li> -->
			</ul>
		</div>
	</nav>
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
			<h1>SEARCH RELEASE ORDER</h1>
			</div>
		</div>
		<form>
			<br><br><br> 
			<div class="row">
				<div class="col-sm-offset-4 col-sm-4 form-group">
					<input type="text" name="ro_client_name" placeholder="CLIENT NAME" class="form-control" style="text-transform: uppercase;">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-offset-4 col-sm-4 form-group">
					<input type="submit" name="ro_submit" value="SEARCH" class="form-control btn btn-info">
				</div>
			</div>
		</form>
		<br><br>
		<div class="row">
		<div class="col-sm-8 table-responsive" style="display: none">
			<table class="table table-bordered">
				<tr>	
				<td width="50%" style="font-weight: bold;">ADVERTISEMENT MANAGER</td><td>EXAMPLE</td>
				</tr>
				<tr>	
				<td width="50%" style="font-weight: bold;">RELEASE ORDER NUMBER</td><td>EXAMPLE</td>
				</tr>
				<tr>
				<td width="50%" style="font-weight: bold;">RELEASE ORDER DATE</td><td>EXAMPLE</td>
					
				</tr>
				<tr>
					
				<td width="50%" style="font-weight: bold;">CLIENT NAME</td><td>EXAMPLE</td>
				</tr>
				<tr>
					
				<td width="50%" style="font-weight: bold;">NATURE OF ADVERTISEMENT</td><td>EXAMPLE</td>
				</tr>
				<tr>
					
				<td width="50%" style="font-weight: bold;">CAPTION</td><td>EXAMPLE</td>
				</tr>
				<tr>
				<td width="50%" style="font-weight: bold;">SIZE</td><td>EXAMPLE</td>
				</tr>
					
				<tr>
					
				<td width="50%" style="font-weight: bold;">RATE</td><td>EXAMPLE</td>
				</tr>
				<tr>
					
				<td width="50%" style="font-weight: bold;">POSITION</td><td>EXAMPLE</td>
				</tr>
				<tr>
					
				<td width="50%" style="font-weight: bold;">DATE OF INSERTIONS</td><td>EXAMPLE</td>
				</tr>
				<tr>
					
				<td width="50%" style="font-weight: bold;">TAKE CARE</td><td>EXAMPLE</td>
				</tr>
			</table>
		</div>
		</div>
		<div class="row" style="display: none">
			<div class="col-sm-12">
				
			<h6>NOTE : PLEASE SEND INVOICE COPIES IMMEDIATELY AFTER THE ADVERTISEMENT IS PUBLISHED</h6>
			</div>
		</div>
	</div>
</body>
</html>