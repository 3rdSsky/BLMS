<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from tblcontact where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='unreadenq.php'</script>";
          }

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || Manage Read Inquiry</title>

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
					<h3 class="title1">Manage Unread Inquiry</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>View Enquiry:</h4>
						<table class="table table-bordered"> <thead> <tr>
                   <th>S.No</th>
                   <th>Name</th>
                    <th>Email</th>
                
                    <th>Inquiry Date</th>
                     <th>Action</th>
                  </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select * from tblcontact where IsRead is null");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr class="gradeX">
                 <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                                        <td><?php  echo $row['Email'];?></td>
                                        <td>
                                            <span class="badge badge-primary"><?php echo $row['EnquiryDate'];?></span>
                                        </td>
                                         <td><a href="view-enquiry.php?viewid=<?php echo $row['ID'];?>" class="btn btn-primary">View</a>
<a href="unreadenq.php?delid=<?php echo $row['ID'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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