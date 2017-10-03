


<!DOCTYPE html>
<html>
<head>
	<title>Register Publication</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
		
	</script>
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
				<li class="active"><a href="publications.php">PUBLICATIONS</a></li>
				<li><a href="clients.php">CLIENT INFORMATION</a></li>
				<li><a href="format.php">RELEASE ORDER</a></li>
				<!-- <li><a href="#">Page 3</a></li> -->
			</ul>
		</div>
	</nav>

	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<form method="POST" action="php/register_public.php">
		<div class="row">
			<div class="col-sm-offset-2">
				<div class="col-sm-7 form-group">
					<input style="text-transform: uppercase;" type="text" id="pub_name_in" name="publication" placeholder="Enter Publication Name" class="form-control" autofocus>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-2">
				<div class="col-sm-3 form-group">
					<input type="submit" id="pub_submit" name="submit" value="SUBMIT" class="form-control btn btn-success">
				</div>
			</div>
		</div>	
		</form>
		<br>
		<div class="row">
			<div class="col-sm-offset-2">	
				<div class="col-sm-4">
					<button class="btn btn-primary" id="getDetails">VIEW ALL PUBLICATIONS</button>
				</div>
			</div>
		</div>
		<br>
		<br><br><br>
		<div class="row" id="table" style="display: none">
			<div class="col-sm-offset-2 col-sm-7">
				<form method="POST" action="php/delete_pub.php">
					<br><br>
					<table class="table table-striped" id="pub_table">
						<th width="20%">ID</th>
						<th width="60%">PUBLICATION NAME</th>
						<th width="10%">SELECT</th>
					</table>
					<div class="col-sm-4">
						<input type="submit" name="delete_sub" class="form-control btn btn-info" value="DELETE SELECTED">
					</div>
					<br><br><br>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		var occurance = false;
		$("#getDetails").click(function(){
		if(occurance == false){
			occurance = true;
			$.ajax({
				url : "php/pubdata.php",
				method : "POST",
				dataType : "JSON",
				success : function(data){
					$("#table").css("display","block");
					for(var a = 0; a<data.length; a++)
					{
						console.log(data[a]['ID']+":"+data[a]['pub_name']);
						var tr = "<tr><td>"+(a+1)+"</td><td>"+data[a]['pub_name']+"</td><td><input type='checkbox' name = 'paper[]' value='"+data[a]['pub_name']+"'></td></tr>"
						console.log(tr);
						$("#pub_table").append(tr);
					}
				}
			})
		}
		});
	});
</script>
</html>