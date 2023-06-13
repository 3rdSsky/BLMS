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
<title>BLMS |  B/W Reports</title>

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
				<div class="forms">
					<h3 class="title1">Between dates reports</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Between dates reports:</h4>
						</div>
						<div class="form-body">
							<form method="post" name="bwdatesreport"  action="bwdates-reports-details.php" enctype="multipart/form-data">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 <div class="form-group"> <label for="exampleInputEmail1">From Date</label> <input type="month" class="form-control1" name="fromdate" id="fromdate" value="" required='true'> </div> 
							 <div class="form-group"> <label for="exampleInputPassword1">To Date</label><input type="month" class="form-control1" name="todate" id="todate" value="" required='true'> </div>
							 
							
							
							  <button type="submit" name="submit" class="btn btn-default">Submit</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>

</body>
</html>
<?php } ?>