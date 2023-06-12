<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || B/W date Reports</title>

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
					<h3 class="title1">Between dates reports</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Between dates reports:</h4>
 <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>

						<table class="table table-bordered"> 
							<thead> <tr> 
								<th>#</th> 
								<th>Invoice Id</th> 
								<th>Customer Name</th> 
								<th>Invoice Date</th> 
								<th>Action</th>
							</tr> 
							</thead> <tbody>
<?php
$ret=mysqli_query($con,"select distinct tbluser.FirstName,tbluser.LastName,tblinvoice2.BillingId,tblinvoice2.PostingDate from  tbluser   
	join tblinvoice2 on tbluser.ID=tblinvoice2.UserId  where date(tblinvoice2.PostingDate) between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['BillingId'];?></td>
						 	<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
						 	<td><?php  echo $row['PostingDate'];?></td> 
						 		<td><a href="view-invoice.php?invoiceid=<?php  echo $row['BillingId'];?>" class="btn btn-primary">View</a></td> 

						  </tr>   <?php 
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