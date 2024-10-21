<?php include_once('header1.php');
include_once('footer.php'); 
require_once('config.php'); 

print_r($_REQUEST);

global $conn;
 $query=mysqli_query($conn,"SELECT * FROM  `tbl_recipe` WHERE `r_category`='".$_REQUEST['id']."'");
 $recipe=array();
 	while($result=mysqli_fetch_assoc($query)){
 	$recipe[]=$result;
 	}
 ?>
 <?php if (isset($_REQUEST['msg'])) {?>
 		<?php if ($_REQUEST['msg']==1) {?>
 			<div class="alert alert-success">Login Successfully</div>
 		<?php  } ?>
 		<?php if ($_REQUEST['msg']==2) {?>
 			<div class="alert alert-success">Register Successfully</div>
 		<?php  } ?>
 		<?php if ($_REQUEST['msg']==3) {?>
 			<div class="alert alert-success">Logout Successfully</div>
 		<?php  } ?>
 <?php } ?>	
<style type="text/css">
	a{
		text-decoration: none;
		color: white;
	}

</style>
		<div class="container">
				<div class="row">
					<div class="col-sm-12 width 100px">
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="foodie3.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="9.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="3.jpg" class="d-block w-100" alt="...">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>
					</div>
				</div>
			</div>
		
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="1.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=india&name=l2">India</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="2.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=china&name=l2">China</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="3.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=vietnam&name=l2">Vietnam</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="4.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=usa&name=l2">USA</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="5.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=korea&name=l2">Korea</a></b></center></h3></p>
					 </div>	
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="6.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=thailand&name=l2">Thailand</a></b></center></h3></p>
					 </div>
					</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="7.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=italy&name=l2">Italy</a></b></center></h3></p>
					 </div>
					</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="8.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=japan&name=l2">Japan</a></b></center></h3></p>
					 </div>
					</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="9.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=france&name=l2">France</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="10.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=spain&name=l2">Spain</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="11.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=brazil&name=l2">Brazil</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="12.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=australia&name=l2">Australia</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="13.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=malaysia&name=l2">Malaysia</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="14.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=mexico&name=l2">Mexico</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="15.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=england&name=l2">England</a></b></center></h3></p>
					 </div>
				</div>
				</div>
				<div class="col-sm-3 mt-3">
					<div class="card" style="width:; background-color:yellowgreen;">
					<img src="16.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text"><h3><center><b><a href="layout2.php?id=indonesia&name=l2">Indonesia</a></b></center></h3></p>
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>

</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>