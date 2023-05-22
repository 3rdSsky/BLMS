<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['bpmsaid'];
    $aname=$_POST['adminname'];
  $mobno=$_POST['contactnumber'];
  
     $query=mysqli_query($con, "update tbladmin set AdminName ='$aname', MobileNumber='$mobno' where ID='$adminid'");
    if ($query) {
    $msg="Admin profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS | Admin Profile</title>

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
					<h3 class="title1">Admin Profile</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Profile :</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
$adminid=$_SESSION['bpmsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div class="form-group"> <label for="exampleInputEmail1">Admin Name</label> <input type="text" class="form-control" id="adminname" name="adminname" placeholder="Admin Name" value="<?php  echo $row['AdminName'];?>"> </div> <div class="form-group"> <label for="exampleInputPassword1">User Name</label> <input type="text" id="username" name="username" class="form-control" value="<?php  echo $row['UserName'];?>" readonly="true"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Contact Number</label> <input type="text" id="contactnumber" name="contactnumber" class="form-control" value="<?php  echo $row['MobileNumber'];?>"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Email address</label> <input type="email" id="email" name="email" class="form-control" value="<?php  echo $row['Email'];?>" readonly='true'> </div>  
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						<?php } ?>
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	
</html>
<?php } ?>