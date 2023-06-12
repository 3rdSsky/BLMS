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
$service=$_POST['service'];
for($i=0;$i<count($sid);$i++){
   $svid=$sid[$i];
$ret=mysqli_query($con,"insert into tblinvoice2(Userid,ServiceId,BillingId,AssignServ,Payment,Service) values('$uid','$svid','$invoiceid','$assignserv','$payment','$service')");


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
		<!--- Services -->		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Assign Services</h3>
					<div class="table-responsive bs-example widget-shadow">
						<h4>Assign Services: <button class="btn btn-secondary" onClick="shownormal()">
							Normal Deals</button> <button class="btn btn-secondary" onClick="showspecial()">
								Special Deals</button> </h4>
								<div class="tblServices">
									<form method="post">
										<table class="table table-bordered"> <thead> <tr> <th>#</th> 
										<th>Service Name</th> <th>Service Price</th> 
										<th>Assigned</th> <th>Action</th> <input type="hidden" name="service" value="normal"></tr> </thead> <tbody>
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
				<option selected disabled>Assign Service</option>
				<option value="Joely Acutillar">Joely Acutillar</option>
				<option value="Fe Durens">Fe Durens</option>
				<option value="Mej Arboleda">Mej Arboleda</option>
				<option value="Josephine Delfin">Josephine Delfin</option>
				<option value="Jill Espacio">Jill Espacio</option>
			</select>
		</div>
</td>
<td><input type="checkbox" class="checks" name="sids[]" 
				value="<?php  echo $row['id']; //$subtotal = $row['Cost'];?>"></td> 
</tr>   
<?php 
$subtotal = 0;
// if(isset($_POST["sids[]"])){
// 	$subtotal += $row['Cost'];
// } else{
// 	$subtotal= 0;
// }
// if(isset($_POST("calculate"))){
// 	if(!empty($_POST["sids"])){
// 		foreach($_POST["sids"] as $sids)
// 		{
// 			echo $sids;
// 		}
// 	}
// 	else{
// 		$subtotal = 0;
// 	}
// }
 $cnt=$cnt+1;
}
?>
<tr>
	<td></td>
	<td></td>

	<td>
	<label for="Total">Total</label>
	<input type="text" name="Total" value="<?php //echo $subtotal?>">
</td>

<td>
	<input type="hidden" name="" value="normal">
	<label for="payment">Payment</label>
	<input type="number" name="payment" id="payment" class="payment">
</td>
<td></td>
<td></td>
</tr>
<tr>

<td colspan="5" align="center">
<button type="submit" name="submit" class="btn btn-danger">Submit</button>		
</td>

</tr>

</tbody> </table> 
</form>

					</div>


		<!--- End of Services -->

		<!--   Package Deals -->
		<div class="tblPackageDeals">
		<form method="post">
						<table class=" table table-bordered"> <thead> <tr> <th>#</th> <th>Service Name</th> <th>Service Price</th> <th>Assigned</th> <th>Action</th> <input type="hidden" name="service" value="special"> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  adstbl");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

 <tr> 
<th scope="row"><?php echo $cnt;?></th> 
<td><?php  echo $row['adstitle'];?></td> 
<td> ₱ <?php  echo $row['cost'];?></td>
<td>
		<div class="select">
			<select name="assignserv" id="sercombobox">
				<option selected disabled>Assign Service</option>
				<option value="Joely Acutillar">Joely Acutillar</option>
				<option value="Fe Durens">Fe Durens</option>
				<option value="Mej Arboleda">Mej Arboleda</option>
				<option value="Josephine Delfin">Josephine Delfin</option>
				<option value="Jill Espacio">Jill Espacio</option>
			</select>
		</div>
</td>
<td><input type="checkbox" class="checks" name="sids[]" 
				value="<?php  echo $row['id'];?>"></td> 
</tr>   
<?php 
$subtotal = 0;
// if(isset($_POST["sids[]"])){
// 	$subtotal += $row['Cost'];
// } else{
// 	$subtotal= 0;
// }
// if(isset($_POST("calculate"))){
// 	if(!empty($_POST["sids"])){
// 		foreach($_POST["sids"] as $sids)
// 		{
// 			echo $sids;
// 		}
// 	}
// 	else{
// 		$subtotal = 0;
// 	}
// }
 $cnt=$cnt+1;
}
?>
<tr>
	<td></td>
	<td></td>
<!--
	<td>
	<label for="total">Total:</label>
	<label id="total" name="total"></label>
</td>
-->
<td>
	<input type="hidden" name="" value="special">
	<label for="payment">Payment</label>
	<input type="number" name="payment" id="payment" class="payment">
</td>
<td></td>
<td></td>
</tr>
<tr>

<td colspan="5" align="center">
<!--<button name="total">Calculate</button>-->
<button type="submit" name="submit" class="btn btn-danger">Submit</button>		
</td>

</tr>

</tbody> </table> 
</form>

		</div>		
					</div>
				</div>
			</div>
		</div>
		
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>

	<script>
  		let normal = document.querySelector('.tblServices');
  		let special = document.querySelector('.tblPackageDeals');

  		let shownormal = function(){
    		special.style.display = 'none';
    		normal.style.display = 'block';
  		}

  		let showspecial = function(){
    		normal.style.display = 'none';
			special.style.display = 'block';
  		}

		//$(docmunet).ready(function(){
			//$('#total').click(function(){
				//var total == [];
				//$('.sids[]').each(function(){
					//if($(this).is(":checked"))
					//{
						//total.push($(this).value());
					//}
				//});
				//total = total.toString();
				//$.ajax({
					//url:"includes/total.php",
					//method:"POST",
					//data:{total:total},
					//success:function(data){
						//$('#total').html(data);
					//}
				//});
			//});
		//});

	</script>
</body>
</html>
<?php }  ?>