<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from servicetry where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='manage-services.php'</script>";
          }


  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || Manage Services</title>

<!--- Head Links --->
<?php include_once('includes/headlinks.php');?>
<!-- //Head Links --->
<

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
					<h3 class="title1">Manage Services</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Update Services:</h4>
						<table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                               		<td> # </td>
                                    <td>Service Name</td>  
                                    <td>Service Category</td>  
                                    <td>Service Price</td>  
                                    <td>Booking Time</td>
                                    <td>Action</td>  
                               </tr>  
                          </thead>  
                          <?php
                          $query ="SELECT * FROM servicetry";  
                          $result = mysqli_query($con, $query);
                          $cnt=1;  
                          while($row = mysqli_fetch_array($result))  
                          {?>   
                               <tr> 
                               		<th scope="row"><?php echo $cnt;?></th> 
                                    <td><?php  echo$row["ServiceName"];?></td>    
                                    <td><?php  echo$row["category"];?></td>  
                                    <td>₱ <?php  echo number_format($row["Cost"],2);?></td>  
                                    <td><?php  echo$row["bookingtime"];?></td>
                                    <td>
                      <a href="edit-services.php?editid=<?php echo $row['id'];?>" class="icon-btn btn btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="manage-services.php?delid=<?php echo $row['id'];?>" class="icon-btn btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
                      </td>

                               </tr> 
                           <?php 
                           $cnt=$cnt+1;     
                          }  
                          ?>  
                     </table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->

</body>
</html>
<?php }  ?>