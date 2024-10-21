<?php 
require_once('config.php');

if (isset($_REQUEST['email'])) {
	global $conn;

	$query=mysqli_query($conn,"SELECT * FROM `tbl_login` WHERE `email`='".$_REQUEST['email']."' and `password`='".md5($_REQUEST['password'])."' ");

	if(mysqli_num_rows($query)==1){
		$result=mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['user_id']=$result['id'];
		$_SESSION['name']=$result['name'];
		//header('location:listing_project.php');
		header('location:layout1.php?msg=1');
	}
	else if(mysqli_num_rows($query)>1){
		header('location:login.php?err=1');
	}
	else if(mysqli_num_rows($query)==0){
		header('location:login.php?err=2');
	}
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form method="post">
		<h1><center>LOGIN</center></h1>
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