<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html lang="en">
  <head>
 

    <title>Beauty Lounge Management System | Booking History</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<?php include_once('includes/sidebar.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>

<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner booking-history ">
        <div class="container">   
            <div class="main-titles-head text-center">
            <h3 class="header-name ">
                
 Invoice History
            </h3>
            <p class="tiltle-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">
        Invoice History</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="history-table	">
        <div class="container">

            <div>
                <div class="cont-details">
                   <div class="table-content table-responsive cart-table-content m-t-30" id="exampl">
                    <h3 class="title1">Invoice Details</h3>
                    
                    <?php
	$invid=intval($_GET['invoiceid']);
$ret=mysqli_query($con,"select DISTINCT  date(tblinvoice2.PostingDate) 
as invoicedate,tbluser.FirstName,tbluser.LastName,tbluser.Email,
tbluser.MobileNumber,tbluser.RegDate,tblinvoice2.Service
	from  tblinvoice2 
	join tbluser on tbluser.ID=tblinvoice2.Userid 
	where tblinvoice2.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>				
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Invoice #<?php echo $invid;?></h4>
						<table class="table table-bordered" width="100%" border="2"> 
<tr>
<th colspan="6">Customer Details</th>	
</tr>
							 <tr> 
								<th>Name</th> 
								<td><?php echo $row['FirstName']?> <?php echo $row['LastName']?></td> 
								<th>Contact no.</th> 
								<td><?php echo $row['MobileNumber']?></td>
								<th>Email </th> 
								<td><?php echo $row['Email']?></td>
							</tr> 
							 <tr> 
								<th>Booking Date</th> 
								<td><?php echo date('M d, Y h:i:s A',strtotime($row['RegDate']));?></td> 
								<th>Invoice Date</th> 
								<td colspan="3"><?php echo date('M d, Y',strtotime($row['invoicedate']));?></td> 
							</tr> 
</table> 
<table class="table table-bordered" width="100%" border="2"> 
<tr>
<th colspan="3">Services Details</th>
</tr>
<tr>
<th>#</th>	
<th>Service</th>
<th>Assign Services</th>
<th>Cost</th>
</tr>
<input type="hidden" value="<?php if($row['Service']=="special") {?>">
	<?php
$ret=mysqli_query($con,"select adstbl.adstitle,adstbl.cost,tblinvoice2.AssignServ,tblinvoice2.Payment  
	from  tblinvoice2 
	join adstbl on adstbl.id=tblinvoice2.ServiceId 
	where tblinvoice2.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) { ?>
<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['adstitle']?></td>
<td><?php echo $row['AssignServ']?></td>	
<td>₱ <?php echo number_format($row['cost'],2);?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal_ads+=$row['cost'];
$payment = $row['Payment'];
} ?>
<tr>
<th colspan="3" style="text-align:center">Grand Total</th>
<th>₱ <?php echo number_format($gtotal_ads,2)?></th>
</tr>
<tr>
<th colspan="3" style="text-align:center">Payment</th>
<th>₱ <?php echo number_format($payment,2)?></th>
</tr>
<tr>
<th colspan="3" style="text-align:center">Change</th>
<th>₱ <?php echo number_format($payment - $gtotal_ads,2)?></th>
</tr>
<?php } else { ?>
<div class="invoice-2ndtable">
</div>
	<?php 
$result=mysqli_query($con,"select servicetry.ServiceName,servicetry.Cost,tblinvoice2.AssignServ,tblinvoice2.Payment  
	from  tblinvoice2 
	join servicetry on servicetry.id=tblinvoice2.ServiceId 
	where tblinvoice2.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($result)) { ?>
<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['ServiceName']?></td>
<td><?php echo $row['AssignServ']?></td>	
<td>₱ <?php echo number_format($row['Cost'],2)?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$row['Cost'];
$payment = $row['Payment'];
} ?>
<tr>
<th colspan="3" style="text-align:center">Grand Total</th>
<th>₱ <?php echo number_format($gtotal,2)?></th>
</tr>
<tr>
<th colspan="3" style="text-align:center">Payment</th>
<th>₱ <?php echo number_format($payment,2)?></th>
</tr>
<tr>
<th colspan="3" style="text-align:center">Change</th>
<th>₱ <?php echo number_format($payment - $gtotal,2)?></th>
</tr>
<?php } ?>

<?php }?>


</tr>
</table>
  <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
                    </div> </div>
                
    </div>
   
    </div></div>
</section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
</body>

</html><?php } ?>