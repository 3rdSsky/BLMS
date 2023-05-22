<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from tbluser where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='unreadenq.php'</script>";
          }

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || Customer List</title>

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
					<h3 class="title1">Customer List</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Customer List:</h4>
						<table id="employee_data" class="table table-bordered"> <thead> <tr> <th>#</th> <th>Name</th> <th>Mobile Number</th><th>Email</th> <th>RegistrationDate</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tbluser");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td> <td><?php  echo $row['MobileNumber'];?></td><td><?php  echo $row['Email'];?></td><td><?php  echo $row['RegDate'];?></td> 
						 	<td> <a href="add-customer-services.php?addid=<?php echo $row['ID'];?>" class="btn btn-primary"><i class="fa fa-book"></i></a>
<a href="customer-list.php?delid=<?php echo $row['ID'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
						 		</td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
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