<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from bkgtbl where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='new-appointment.php'</script>";
          }

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || New Appointment</title>

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
					<h3 class="title1">New Appointment</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>New Appointment:</h4>
						<table id="employee_data" class="main-table table table-bordered"> <thead> <tr> <th>#</th> 
						<th> Appointment Number</th> 
						<th>Name</th><th>Mobile Number</th> 
						<th>Service Name</th><th>Cost</th> 
						<th>Appointment Date</th>
						<th>Appointment Time</th>
						<th>Form of Payment</th>
						<th>Status</th><th>Action</th> </tr> </thead> <tbody>
<?php

$ret=mysqli_query($con,"SELECT blmsdb.bkgtbl.id AS 'bid', blmsdb.tbluser.LastName, blmsdb.tbluser.FirstName, 
                          blmsdb.bkgtbl.aptnumber, blmsdb.tbluser.MobileNumber, blmsdb.bkgtbl.servicename,
                          blmsdb.bkgtbl.cost, blmsdb.bkgtbl.aptdate, blmsdb.bkgtbl.apttime, blmsdb.bkgtbl.payment 
						  FROM blmsdb.tbluser RIGHT JOIN blmsdb.bkgtbl
                          ON blmsdb.tbluser.ID = blmsdb.bkgtbl.userid
                          WHERE Status IS NULL");

$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> 
						 <td><?php  echo $row['aptnumber'];?></td> 
						 <td><?php  echo $row['FirstName'];?> 
						 <?php  echo $row['LastName'];?></td><td>
							<?php  echo $row['MobileNumber'];?></td>
							<td><?php  echo $row['servicename'];?></td> 
							<td>₱ <?php  echo $row['cost'];?></td><td>
								<?php  echo $row['aptdate'];?></td> 
								<td><?php  echo $row['apttime'];?></td>
								<td><?php echo $row['payment'];?></td>
						 	<?php if($row['Status']==""){ ?>

                     <td class="font-w600"><?php echo "Pending"; ?></td>
                     <?php } else { ?>
                      <td><?php  echo $row['Status'];?></td><?php } ?> 
                      <td><a href="view-appointment.php?viewid=<?php echo $row['bid'];?>" class="icon-btn btn btn-primary"><i class="fa fa-eye"></i></a>
<a href="new-appointment.php?delid=<?php echo $row['bid'];?>" class="icon-btn btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a></td> </tr>   <?php 
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
			         <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
<?php }  ?>