<?php 
require_once('config.php'); 	
global $conn;
$query=mysqli_query($conn,"SELECT * FROM `tbl_recipe` WHERE `id`='".$_REQUEST['id']."'");
$result=mysqli_fetch_assoc($query);
if(isset($_REQUEST['submit'])){
	// echo "UPDATE `tbl_recipe` SET 		
	// 	`r_name`='".$_REQUEST['r_name']."',	
	// 	`r_category`='".$_REQUEST['r_category']."',		
	// 	`r_desc`='".$_REQUEST['r_desc']."',		
	// 	`r_photo`='".$_FILES['r_photo']['name']."',		
	// 	`r_youtube`='".$_REQUEST['r_youtube']."'
	// 	WHERE `id`='".$_REQUEST['id']."'
	// 	";exit();
	
 mysqli_query($conn,"UPDATE `tbl_recipe` SET 		
		`r_name`='".$_REQUEST['r_name']."',	
		`r_category`='".$_REQUEST['r_category']."',		
		`r_desc`='".addslashes($_REQUEST['r_desc'])."',		
		`r_photo`='".$_FILES['r_photo']['name']."',		
		`r_youtube`='".$_REQUEST['r_youtube']."'
		WHERE `id`='".$_REQUEST['id']."'
		");
 header('location:listing_recipe.php?msg=2');
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
				Recipe Name:<input type="text" class="form-control" name="r_name" value="<?php echo $result['r_name'];?>">
			</div>
			<div class="col-sm-12 mt-3">
				Recipe Category:<select class="form-control" name="r_category" ><option>Select</option>
				<option <?php if($result['r_category']=="india"){ ?> selected="selected" <?php } ?> value="india">India</option>
				<option <?php if($result['r_category']=="china"){ ?> selected="selected" <?php } ?> value="china">China</option>
				<option <?php if($result['r_category']=="vietnam"){ ?> selected="selected" <?php } ?> value="vietnam">Vietnam</option>
				<option <?php if($result['r_category']=="usa"){ ?> selected="selected" <?php } ?> value="usa">USA</option>
				<option <?php if($result['r_category']=="korea"){ ?> selected="selected" <?php } ?> value="korea">Korea</option>
				<option <?php if($result['r_category']=="thailand"){ ?> selected="selected" <?php } ?> value="thailand">Thailand</option>
				<option <?php if($result['r_category']=="italy"){ ?> selected="selected" <?php } ?>value="italy">Italy</option>
				<option <?php if($result['r_category']=="japan"){ ?> selected="selected" <?php } ?>value="japan">Japan</option>
				<option <?php if($result['r_category']=="france"){ ?> selected="selected" <?php } ?>value="france">France</option>
				<option <?php if($result['r_category']=="spain"){ ?> selected="selected" <?php } ?>value="spain">Spain</option>
				<option <?php if($result['r_category']=="brazil"){ ?> selected="selected" <?php } ?>value="brazil">Brazil</option>
				<option <?php if($result['r_category']=="australia"){ ?> selected="selected" <?php } ?>value="australia">Australia</option>
				<option <?php if($result['r_category']=="malaysia"){ ?> selected="selected" <?php } ?>value="malaysia">Malaysia</option>
				<option <?php if($result['r_category']=="mexico"){ ?> selected="selected" <?php } ?>value="mexico">Mexico</option>
				<option <?php if($result['r_category']=="england"){ ?> selected="selected" <?php } ?>value="england">England</option>
				<option <?php if($result['r_category']=="indonesia"){ ?> selected="selected" <?php } ?>value="indonesia">Indonesia</option>

		</select>
			</div>
			<div class="col-sm-12 mt-3">
				Recipe Description:<textarea rows="10" class="form-control" name="r_desc"><?php echo stripslashes($result['r_desc']); ?></textarea>
			</div>
			<div class="col-sm-12 mt-3">
				<img src="upload/<?php echo $result['r_photo'];?>" style="height:100px; width: 100px;"><br>
				Recipe Photo:<input type="file" class="form-control" name="r_photo" value="">
			</div>
			<div class="col-sm-12 mt-3">
				Youtube Link:<input type="text" class="form-control" name="r_youtube" value="<?php echo $result['r_youtube'];?>">
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
