<?php include_once('header2.php'); ?>

<?php 
require_once('config.php'); 	
global $conn;
 $query=mysqli_query($conn,"SELECT * FROM  `tbl_recipe` WHERE `r_category`='".$_REQUEST['id']."'");
 $recipe=array();
 	while($result=mysqli_fetch_assoc($query)){
 	$recipe[]=$result;
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
	<form>
		<div class="container-fluid">
			<div class="row mt-5">
				<?php foreach($recipe as $val){ ?>
				<div class="col-sm-3 m-4">
					<div class="card" >
						 <img src="upload/<?php echo $val['r_photo'];  ?>" class="card-img-top" alt="...">
						  <div class="card-body">
						    <p class="card-text"><b><a href="product_details.php?name=l2&id=<?php echo $val['id']; ?>" ><?php echo $val['r_name']; ?></a></b></p>
						  </div>
					</div>
				</div>
				<?php } ?>
					
				</div>
			</div>
		</div>
	</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>