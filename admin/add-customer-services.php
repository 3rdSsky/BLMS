<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit'])){


$uid=intval($_GET['addid']);
$invoiceid=mt_rand(100000000, 999999999);
$sid=$_POST['sids'];
$assignserv=$_POST['assignserv'];
$payment=$_POST['payment'];
for($i=0;$i<count($sid);$i++){
   $svid=$sid[$i];
$ret=mysqli_query($con,"insert into tblinvoice2(Userid,ServiceId,BillingId,AssignServ,Payment) values('$uid','$svid','$invoiceid','$assignserv','$payment')");


echo '<script>alert("Invoice created successfully. Invoice number is "+"'.$invoiceid.'")</script>';
echo "<script>window.location.href ='invoices.php'</script>";
}
}
 


  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS || Assign Services</title>

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
					<h3 class="title1">Assign Services</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Assign Services:</h4>
<form method="post">
						<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Service Name</th> <th>Service Price</th> <th>Assigned</th> <th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  servicetry");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

 <tr> 
<th scope="row"><?php echo $cnt;?></th> 
<td><?php  echo $row['ServiceName'];?></td> 
<td> ₱ <?php  echo $row['Cost'];?></td>
<td>
		<div class="select">
			<select name="assignserv" id="sercombobox">
				<option selected disabled>Assigned</option>
				<option value="Joely Acutillar">Joely Acutillar</option>
				<option value="Fe Durens">Fe Durens</option>
				<option value="Mej Arboleda">Mej Arboleda</option>
				<option value="Josephine Delfin">Josephine Delfin</option>
				<option value="Jill Espacio">Jill Espacio</option>
			</select>
		</div>
</td>
<td><input type="checkbox" class="checks" name="sids[]" 
			onClick="isChecked()"	value="<?php  echo $row['id'];?>"></td> 
</tr>   
<?php 
if(isset($_POST["sids[]"])){
	$gtotal += $total;
} else{
	$gtotal= 0;
}
$cnt=$cnt+1;
}
?>
<tr>
	<td></td>
	<td></td>
<td>
	<label for="Total">Total</label>
	<input type="text" name="Total" value="<?php echo $gtotal?>">
</td>
<td>
	<label for="payment">Payment</label>
	<input type="number" name="payment" id="payment" class="payment">
</td>
</tr>
<tr>

<td colspan="4" align="center">
<button type="submit" name="submit" class="btn btn-danger">Submit</button>		
</td>

</tr>

</tbody> </table> 
</form>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>

	<script>
		function isChecked(){
			if(document.querySelector('.checks').checked){
				document.querySelector('.Total').textContent = " <?php  echo $row['Cost'];?> ";
			}
		}
	</script>
</body>
</html>
<?php }  ?>