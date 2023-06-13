<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{ 
if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from tblinvoice2 where BillingId ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='invoices.php'</script>";
          }


  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || Invoices</title>

<<!--- Head Links --->
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
					<h3 class="title1">Invoice List</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Invoice List:</h4>
						<table id="employee_data" class="table table-bordered"> 
							<thead> <tr> 
								<th>#</th> 
								<th>Invoice Id</th> 
								<th>Customer Name</th> 
								<th>Invoice Date</th> 
								<th>Action</th>
							</tr> 
							</thead> <tbody>
<?php
$ret=mysqli_query($con,"select distinct tbluser.FirstName,tbluser.LastName,tblinvoice2.BillingId,date(tblinvoice2.PostingDate) as invoicedate from  tbluser   
	join tblinvoice2 on tbluser.ID=tblinvoice2.Userid  order by tblinvoice2.ID desc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['BillingId'];?></td>
						 	<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
						 	<td><?php  echo date('M d, Y',strtotime($row['invoicedate']));?></td> 
						 		<td><a href="view-invoice.php?invoiceid=<?php  echo $row['BillingId'];?>" class="icon-btn btn btn-primary"><i class="fa fa-eye"></i></a>
<a href="invoices.php?delid=<?php echo $row['BillingId'];?>" class="icon-btn btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
						 		</td> 

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