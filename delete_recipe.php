<?php 
require_once('config.php'); 	
global $conn;
mysqli_query($conn,"DELETE FROM `tbl_recipe` WHERE `id`='".$_REQUEST['id']."'");
header('location:listing_recipe.php?msg=3');
 ?>