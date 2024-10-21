<?php 
require_once('config.php'); 	
global $conn;
 $query=mysqli_query($conn,"SELECT * FROM  `tbl_recipe`");
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
 	<?php if (isset($_REQUEST['msg'])) {?>
 		<?php if ($_REQUEST['msg']==1) {?>
 			<div class="alert alert-success">Record Added Successfully</div>
 		<?php  } ?>
 		<?php if ($_REQUEST['msg']==2) {?>
 			<div class="alert alert-success">Record Edited Successfully</div>
 		<?php  } ?>
 		<?php if ($_REQUEST['msg']==3) {?>
 			<div class="alert alert-success">Record Deleted Successfully</div>
 		<?php  } ?>
 	<?php } ?>	
 	<a href="add_recipe.php" class="btn btn-primary">Add Record</a>
 	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <form>
 	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            	
            	<th>ID</th>
                <th>Recipe Name</th>
                <th>Recipe Category</th>
                <!-- <th>Recipe Description</th> -->
                <th>Recipe Photo</th>
                <th>Youtube Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php $i=1; foreach ($recipe as $a) { ?>
        	 <tr>
            	<td><?php echo $i; ?></td>
                <td><?php echo $a['r_name']; ?></td>
                <td><?php echo $a['r_category']; ?></td>
                <!-- <td><?php echo $a['r_desc']; ?></td> -->
                <td><?php echo $a['r_photo']; ?></td>
                <td><?php echo $a['r_youtube'] ?></td>
                <td><a href="edit_recipe.php?id=<?php echo $a['id']; ?>">Edit</a>&nbsp|&nbsp <a href="delete_recipe.php?id=<?php echo $a['id']; ?>">Delete</a></td>
            </tr>
        <?php $i++;} ?>
        </tbody>
 </form>



 <script type="text/javascript">
	$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
 </html>