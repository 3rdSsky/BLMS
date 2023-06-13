<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from adstbl where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='manage-package.php'</script>";
          }


  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || Manage Services</title>

<!--- Head Links --->
<?php include_once('includes/headlinks.php');?>
<!-- //Head Links --->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Manage Packages or Deals</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Update Services:</h4>
						<table id="employee_data" class="table table-striped table-bordered">
							<thead> 
								<tr> 
									<th width="10">#</th> 
									<th width="50">Packages or Deals Title</th>
									<th width="50">Description</th> 
									<th width="50">Price</th> 
									<th width="50">Action</th> </tr> 
								</thead> 
								<tbody>
									<?php
										$query ="SELECT * FROM adstbl";  
                          				$result = mysqli_query($con, $query);
                          				$cnt=1;  
                          				while($row = mysqli_fetch_array($result)) {

									?>
									<tr> 
										<th scope="row"><?php echo $cnt;?></th> 
										<td><?php  echo $row['adstitle'];?></td>
										<td><?php  echo $row['adsdescription'];?></td>  
										<td>₱ <?php  echo number_format($row['cost'],2);?></td> 
										<td>
											<a href="edit-packages.php?editid=<?php echo $row['id'];?>" class="icon-btn btn btn-primary"><i class="fa fa-eye"></i></a>
										 	<a href="manage-package.php?delid=<?php echo $row['id'];?>" class="icon-btn btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
										 	</td> 
										 	</tr>   
										 	<?php 
													$cnt=$cnt+1;
													}?>
									</tbody> 
							</table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>
	</body>
</html>
<?php }  ?>