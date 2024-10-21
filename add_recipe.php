<?php
require_once('config.php'); 	
if(isset($_REQUEST['submit'])){
	global $conn;
	$query=mysqli_query($conn,"INSERT INTO `tbl_recipe` SET 		
		`r_name`='".$_REQUEST['r_name']."',	
		`r_category`='".$_REQUEST['r_category']."',	
		`r_desc`='".addslashes($_REQUEST['r_desc'])."',		
		`r_photo`='".$_FILES['r_photo']['name']."',		
		`r_youtube`='".$_REQUEST['r_youtube']."'
		");
	move_uploaded_file($_FILES['r_photo']['tmp_name'],"upload/".$_FILES['r_photo']['name']);
	//header('location:listing_recipe.php?msg=1');
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
<form method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-3">
				Recipe Name:<input type="text" class="form-control" name="r_name">
			</div>
			<div class="col-sm-12 mt-3">
				Recipe Category:<select class="form-control" name="r_category">
					<option>Select</option>
														<option value="india">India</option>
														<option value="china">China</option>
														<option value="vietnam">Vietnam</option>
														<option value="usa">USA</option>
														<option value="korea">Korea</option>
														<option value="thailand">Thailand</option>
														<option value="italy">Italy</option>
														<option value="japan">Japan</option>
														<option value="france">France</option>
														<option value="spain">Spain</option>
														<option value="brazil">Brazil</option>
														<option value="australia">Australia</option>
														<option value="malaysia">Malaysia</option>
														<option value="mexico">Mexico</option>
														<option value="england">England</option>
														<option value="indonesia">Indonesia</option>
								</select>
			</div>
			<div class="col-sm-12 mt-3">
				Recipe Description:<textarea input type="text" class="form-control" name="r_desc"></textarea>
			</div>
			<div class="col-sm-12 mt-3">
				Recipe Photo:<input type="file" class="form-control" name="r_photo">
			</div>
			<div class="col-sm-12 mt-3">
				Youtube Link:<input type="text" class="form-control" name="r_youtube">
			</div>
			<div class="col mt-3">
				<input type="submit" class="btn btn-primary" name="submit">
			</div>
		</div>
	</div>	
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>