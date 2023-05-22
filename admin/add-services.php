<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $sername=$_POST['sername'];
    $serdesc=$_POST['serdesc'];
    $cost=$_POST['cost'];
   	$image=$_POST['image'];
	$image=$_FILES["image"]["name"];
	$sercategory=$_POST["category"];
	$serbook=$_POST["book-time"];
// get the image extension
$extension = substr($image,strlen($image)-4,strlen($image));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
} else {
	//rename the image file
	$newimage=md5($image).time().$extension;
	// Code for move image into directory
	move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$newimage); 
	$query=mysqli_query($con, "insert into  servicetry(ServiceName,ServiceDescription,category,Cost,bookingtime,Image) value('$sername','$serdesc','$sercategory','$cost','$serbook','$newimage')");
	if ($query) {
    	echo "<script>alert('Service has been added.');</script>"; 
    		echo "<script>window.location.href = 'add-services.php'</script>";   
    	} else {
    		echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    	}
    }
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS | Add Services</title>

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
					<h3 class="title1">Add Services</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Parlour Services:</h4>
						</div>
						<div class="form-body">
							<form method="post" enctype="multipart/form-data">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  							<div class="form-group">
	  							<h3>Choose a Services</h3>
									<div class="select">
										<select name="category" id="sercombobox">
											<option selected disabled>Choose a Category</option>
											<option value="Beauty Services">Beauty Services</option>
											<option value="Gluta Drip">Gluta Drip</option>
											<option value="Gluta Services">Gluta Services</option>
											<option value="Elite Services">Elite Services</option>
											<option value="Slimming Services">Slimming Services</option>
										</select>
									</div>
								</div>

							 <div class="form-group"> 
								 	<label for="exampleInputEmail1">Service Name</label> 
								 	<input type="text" class="form-control" id="sername" name="sername" placeholder="Service Name" value="" required="true"> 
							 </div>
							 <div class="form-group"> 
								 	<label for="exampleInputEmail1">Service Description</label> 
								 	<textarea type="text" class="form-control" id="sername" name="serdesc" placeholder="Service Name" value="" required="true">
								 	</textarea> 
							 </div>
							 <div class="form-group"> 
							  	<label for="exampleInputPassword1">Cost</label> 
							  	<input type="text" id="cost" name="cost" class="form-control" placeholder="Cost" value="" required="true"> 
							 </div>
							 <div class="form-group"> 
							  	<label for="exampleInputPassword1">Booking Time</label> 
							  	<input type="text" id="book-time" name="book-time" class="form-control" placeholder="Booking Time" value="" required="true"> 
							 </div>
							<div class="form-group"> 
								<label for="exampleInputEmail1">Images</label> <input type="file" class="form-control" id="image" name="image" value="" required="true"> 
							</div>
							  <button type="submit" name="submit" class="btn btn-default">Add</button> 
							</form> 
						</div>
					</div>
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	
</body>
</html>
<?php } ?>