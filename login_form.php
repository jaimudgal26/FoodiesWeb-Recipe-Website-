<?php 
require_once('config.php'); 	

if(isset($_REQUEST['submit'])){
	global $conn;
	
	$query=mysqli_query($conn,"INSERT INTO `tbl_login` SET 		
		`name`='".$_REQUEST['name']."',	
		`email`='".$_REQUEST['email']."',	
		`password`='".($_REQUEST['password'])."'	
		");
	header('location:layout1.php?msg=2');
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form method="post">
		<h1><center>REGISTER</center></h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-12-md-3">
					Name-<input type="text" class="form-control" name="name">
				</div>
				<div class="col-sm-12-md-3">
					Email-<input type="email" class="form-control" name="email">
				</div>
				<div class="col-sm-12-md-3">  
					Password-<input type="password" class="form-control" name="password">
				</div>
				<div class="col-sm-12-md-3 mt-3">
					<input type="submit" name="submit" class="btn btn-primary">
				</div>
			</div>
		</div>
	</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>