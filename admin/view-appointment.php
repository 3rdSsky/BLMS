<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{ 
    $cid=$_GET['viewid'];
    $status=$_POST['status'];
   	$query=mysqli_query($con, "update  bkgtbl set Status='$status' where ID='$cid'");
    if ($query) {
    
    echo '<script>alert("All remark has been updated.")</script>';
    echo "<script type='text/javascript'> document.location ='all-appointment.php'; </script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>
  <!DOCTYPE HTML>
  <html>
  <head>
  	<title>BLMS || View Appointment</title>
  	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  	<!-- Bootstrap Core CSS -->
  	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  	<!-- Custom CSS -->
  	<link href="css/style.css" rel='stylesheet' type='text/css' />
  	<!-- font CSS -->
  	<!-- font-awesome icons -->
  	<link href="css/font-awesome.css" rel="stylesheet"> 
  	<!-- //font-awesome icons -->
  	<!-- js-->
  	<script src="js/jquery-1.11.1.min.js"></script>
  	<script src="js/modernizr.custom.js"></script>
  	<!--webfonts-->
  	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  	<!--//webfonts--> 
  	<!--animate-->
  	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  	<script src="js/wow.min.js"></script>
  	<script>
  		new WOW().init();
  	</script>
  	<!--//end-animate-->
  	<!-- Metis Menu -->
  	<script src="js/metisMenu.min.js"></script>
  	<script src="js/custom.js"></script>
  	<link href="css/custom.css" rel="stylesheet">
  	<!--//Metis Menu -->
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
						<h3 class="title1">View Appointment</h3>
						<div class="table-responsive bs-example widget-shadow">
							<h4>View Appointment:</h4>
							<?php
							$cid=$_GET['viewid'];
							$ret=mysqli_query($con,"select tbluser.FirstName,tbluser.LastName,tbluser.Email,
							tbluser.MobileNumber,bkgtbl.id as bid,bkgtbl.aptnumber,bkgtbl.aptdate,bkgtbl.
							apttime,bkgtbl.servicename,bkgtbl.cost,bkgtbl.bookingDate,bkgtbl.Status,bkgtbl.payment,
							bkgtbl.Image from bkgtbl 
							join tbluser on tbluser.ID=bkgtbl.userid where bkgtbl.id='$cid'");
							$cnt=1;
							while ($row=mysqli_fetch_array($ret)) {
								?>
								<table class="table table-bordered">
								<tr>
									<th>Appointment Number</th>
									<td><?php  echo $row['aptnumber'];?></td>
								</tr>
								<tr>
									<th>Name</th>
									<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
								</tr>
								<tr>
									<th>Email</th>
									<td><?php  echo $row['Email'];?></td>
								</tr>
								<tr>
									<th>Mobile Number</th>
									<td><?php  echo $row['MobileNumber'];?></td>
								</tr>
								<tr>
									<th>Service Name</th>
									<td><?php  echo $row['servicename'];?></td>
								</tr>
								<tr>
									<th>Cost</th>
									<td>₱ <?php  echo number_format($row['cost'],2);?></td>
								</tr>
								<th>Appointment Date</th>
									<td><?php  echo date('M d, Y',strtotime($row['aptdate']));?></td>
								</tr>
								<tr>
									<th>Appointment Time</th>
									<td><?php  echo date('h:i:s A',strtotime($row['apttime']));?></td>
								</tr>
								<tr>
									<th>Apply Date</th>
									<td><?php  echo $row['bookingDate'];?></td>
								</tr>
								<tr>
                            <th>Form of Payment</th>
                            <td><?php  echo $row['payment'];?></td>
                          	</tr>
                          	<tr>
							  <td></td>
                            <th><?php  
                                if($row['payment']=="Onsite")
                                {
                                  echo "";
                                }

                                if($row['payment']=="Online")
                                {
                                  ?>
                                  <img src="../receipt/<?php echo $row['Image']?>" alt="Image Receipt" height="180" width="350" class="img-responsive about-me">
                                <?php
                                }
                                ;?>
                               </th>
                                </tr>
								<tr>
									<th>Status</th>
									<td> <?php  
									if($row['Status']=="")
									{
										echo "Pending";
									}
									if($row['Status']=="Accepted")
									{
										echo "Accepted";
									}
									if($row['Status']=="Rejected")
									{
										echo "Rejected";
									};?>
										
									</td>
								</tr>
							</table>
							<table class="table table-bordered">
								<?php if($row['Status']==""){ ?>

									<form name="submit" method="post" enctype="multipart/form-data"> 
										<tr>
										<th>Status :</th>
										<td>
											<select name="status" class="form-control wd-450" required="true" >
												<option value="" selected="true">Select Status</option>
												<option value="Accepted">Accepted</option>
												<option value="Rejected">Rejected</option>
												<option value="Rejected">No Show Client</option>
											</select></td>
										</tr>
										<tr align="center">
											<td colspan="2"><button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
										</tr>
										</form>
									<?php } else { ?>
									</table>
									<table class="table table-bordered">
										<tr>
											<th>Status</th>
											<td><?php echo $row['Status']; ?></td>
										</tr>
										</table>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
		<!--footer-->
		
        <!--//footer-->
	</div>
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