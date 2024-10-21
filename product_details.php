<?php include_once('header2.php'); ?>

<?php 
require_once('config.php'); 	
global $conn;
 $query=mysqli_query($conn,"SELECT * FROM  `tbl_recipe` WHERE `id`='".$_REQUEST['id']."'");
 $recipe=array();
 	$recipe=mysqli_fetch_assoc($query);
 	
?>
<?php
	
		// Check connection
		// if($conn->connect_error) {
		//     die("Connection failed: " . $conn->connect_error);
		// }
		// Select reviews from database
		// $sql = "SELECT * FROM reviews";
		// $result = $conn->query($sql);

		// if ($result->num_rows > 0) {
		//     // Output data of each row
		//     while($row = $result->fetch_assoc()) {
		//         echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Review: " . $row["review"]. "<br>";
		//     }
		// } else {
		//     echo "0 results";
		// }
		// $conn->close();
		// //header('location:insert_review.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style type="text/css">
	.desc{
		word-wrap: break-word;
	}
	.review {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}
.review p {
    margin: 5px 0;
}
</style>
</head>
<body>
	<form id="review-form" method="post" action="insert_review.php">
		<div class="container-fluid">
			<div class="row mt-5">
			
					<div class="col-sm-3 m-4">
						<img src="upload/<?php echo $recipe['r_photo'];  ?>" class="card-img-top" alt="...">
					</div>

			
					<div class="col-sm-7 m-4">
						<b><a href="product_details.php?id=<?php echo $recipe['id']; ?>" ><?php echo $recipe['r_name']; ?></a></b>
						<div class="desc">
							
							<?php echo stripslashes($recipe['r_desc']); ?>
						</div>
						<div>
						 <p><b> Also Refer to:</b><a href="<?php echo $recipe['r_youtube']; ?>"><?php echo $recipe['r_youtube']; ?></a></p> 	
						</div>

						<!-- HTML form with a review button -->
				
				    <div class="col-sm-12-md-3 mt-3">
				    	<a href="insert_review.php"><input type="button" name="review_button" value="Add your Reviews" class="btn btn-primary" ></a>
					</div>
					<div id="reviews">
						
                    <?php include 'fetch_reviews.php'; ?>
                </div>
				</div>
			</div>
		</div>
	</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>