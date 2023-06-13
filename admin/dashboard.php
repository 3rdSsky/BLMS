<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BLMS | Admin Dashboard</title>

<!--- Head Links --->
<?php include_once('includes/headlinks.php');?>
<!-- //Head Links --->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
		
	<?php include_once('includes/sidebar.php');?>
		
	<?php include_once('includes/header.php');?>
		<!-- main content start-->
		<div id="page-wrapper" class="row calender widget-shadow">
			<div class="main-page">
				
			
				<div class="row calender widget-shadow">
					<div class="row-one">
						<div class="col-md-4 widget">
							<a href="customer-list.php">
							<?php $query1=mysqli_query($con,"Select * from tbluser");
									$totalcust=mysqli_num_rows($query1);
							?>
							<div class="stats-left ">
								<h5>Total</h5>
								<h4>Customer</h4>
							</div>
							<div class="stats-right">
								<label> <?php echo $totalcust;?></label>
							</div>
							<div class="clearfix"> </div>	
							</a>
							</div>
					<!--
					<div class="col-md-4 widget states-mdl">
						<?php $query2=mysqli_query($con,"Select * from bkgtbl");
$totalappointment=mysqli_num_rows($query2);
?>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Appointment</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $totalappointment;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<?php $query3=mysqli_query($con,"Select * from bkgtbl where Status='Accepted'");
$totalaccapt=mysqli_num_rows($query3);
?>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Accepted Apt</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $totalaccapt;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
						
					</div>

				<div class="row calender widget-shadow">
					<div class="row-one">
					<div class="col-md-4 widget">
						<?php $query4=mysqli_query($con,"Select * from bkgtbl where Status='Rejected'");
$totalrejapt=mysqli_num_rows($query4);
?>
						<div class="stats-left ">
							<h5>Total</h5>
							<h4>Rejected Apt</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $totalrejapt;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
-->
					
					<div class="col-md-4 widget states-mdl">
						<a href="manage-services.php">
						<?php $query5=mysqli_query($con,"Select * from  servicetry");
								$totalser=mysqli_num_rows($query5);
						?>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Services</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $totalser;?></label>
						</div>
						<div class="clearfix"> </div>
						</a>	
					</div>

					<div class="col-md-4 widget states-last">
						<a href="manage-package.php">
						<?php $query10=mysqli_query($con,"Select * from  adstbl");
								$totaldeals=mysqli_num_rows($query10);
						?>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Package or Deals</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $totaldeals;?></label>
						</div>
						<div class="clearfix"> </div>
						</a>	
					</div>
					<!-- Sales
					
					<div class="col-md-4 widget states-last">
						<?php
//todays sale
 $query6=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, servicetry.Cost
 from tblinvoice2 
  join servicetry on servicetry.id=tblinvoice2.ServiceId where date(PostingDate)=CURDATE() and Service='normal';");

while($row=mysqli_fetch_array($query6))
{
$service_todays_sale=$row['Cost'];
$sub_service_td+=$service_todays_sale;

}
?>
<?php
$query11=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, adstbl.adstitle, adstbl.cost
from tblinvoice2 
 join adstbl on adstbl.id=tblinvoice2.ServiceId where date(PostingDate)=CURDATE() and Service='special';");
while($row11=mysqli_fetch_array($query11))
{
$ads_today_sale=$row11['cost'];
$sub_ads_td+=$ads_today_sale;
}
$todysale = $sub_service_td + $sub_ads_td;
 ?>
 <!--
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Sales</h4>
						</div>
						<div class="stats-right">
							<label> <?php 
if($todysale==""):
							echo "0";
else:
	echo $todysale;
endif;
						?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					
					<div class="clearfix"> </div>
					-->	
				</div>
						
					</div>

<!---				<div class="row calender widget-shadow">
					<div class="row-one">
					<div class="col-md-4 widget">
						<?php
//Yesterday's sale
 $query7=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, servicetry.Cost
 from tblinvoice2 
  join servicetry  on servicetry.id=tblinvoice2.ServiceId where date(PostingDate)=CURDATE()-1 and Service='normal';");
while($row7=mysqli_fetch_array($query7))
{
$service_yesterdays_sale=$row7['Cost'];
$sub_service_ys+=$service_yesterdays_sale;

}

$query12=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, adstbl.cost
from tblinvoice2 
 join adstbl  on adstbl.id=tblinvoice2.ServiceId where date(PostingDate)=CURDATE()-1 and Service='special';");
while($row12=mysqli_fetch_array($query12))
{
$ads_yesterdays_sale=$row12['cost'];
$sub_ads_ys+=$ads_yesterdays_sale;
}
$yesterdaysale = $sub_ads_ys + $sub_service_ys;
 ?>
						<div class="stats-left ">
							<h5>Yesterday</h5>
							<h4>Sales</h4>
						</div>
						<div class="stats-right">
							<label> <?php 
if($yesterdaysale==""):
							echo "0";
else:
	echo $yesterdaysale;
endif;
						?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<?php
//Last Sevendays Sale
 $query8=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, servicetry.Cost
 from tblinvoice2 
  join servicetry  on servicetry.id=tblinvoice2.ServiceId where date(PostingDate)>=(DATE(NOW()) - INTERVAL 7 DAY) and Service='normal';");
while($row8=mysqli_fetch_array($query8))
{
$service_sevendays_sale=$row8['Cost'];
$sub_service_LS+=$service_sevendays_sale;
}

$query13=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, adstbl.cost
from tblinvoice2 
 join adstbl  on adstbl.id=tblinvoice2.ServiceId where date(PostingDate)>=(DATE(NOW()) - INTERVAL 7 DAY) and Service='special';");
while($row13=mysqli_fetch_array($query13))
{
$ads_sevendays_sale=$row13['cost'];
$ads_sub_LS+=$ads_sevendays_sale;
}

$tseven = $sub_service_LS + $ads_sub_LS;
 ?>
						<div class="stats-left">
							<h5>Last Sevendays</h5>
							<h4>Sale</h4>
						</div>
						<div class="stats-right">
							<label> <?php 

						if($tseven==""):
							echo "0";
else:
	echo $tseven;
endif;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<?php
//Total Sale
 $query9=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, servicetry.Cost
 from tblinvoice2 
  join servicetry  on servicetry.id=tblinvoice2.ServiceId and Service='normal'");
while($row9=mysqli_fetch_array($query9))
{
$service_total_sale=$row9['Cost'];
$sub_service_gtotal+=$service_total_sale;
}

$query14=mysqli_query($con,"select tblinvoice2.ServiceId as ServiceId, adstbl.cost
from tblinvoice2 
 join adstbl  on adstbl.id=tblinvoice2.ServiceId and Service='special'");
while($row14=mysqli_fetch_array($query14))
{
$ads_total_sale=$row14['cost'];
$sub_ads_gtotal+=$ads_total_sale;
}
$totalsale = $sub_service_gtotal + $sub_ads_gtotal;
 ?>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Sales</h4>
						</div>
						<div class="stats-right">
							<label><?php

		if($totalsale==""):
							echo "0";
else:
	echo $totalsale;
endif;
						?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
						
					</div>
				</div>
-->
				<div class="custom-chart row calender widget-shadow">
					<div class=" row-one">
					<div class="dropdown">
  						<button class="btn btn-secondary" onClick="showsale()">
    					Sales</button>
						<button class="btn btn-secondary" onClick="showcustomer()">Appointment</button>
  						<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
						 <label for="exampleInputEmail1"></label> 
						 <input type="date" class="form-control1" name="fromdate" id="fromdate" value="" required='true'> 
  						</div>
					</div>
		<div class="chartsize">
  			<canvas class="" id="myChart"></canvas>
		</div>

		<div class="chartsize2">
  		<canvas class="" id="myChart2"></canvas>
		</div>
				</div>
				</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--footer-->
		<?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>

	<!-- Line Chart -->
	<script>
  			const ctx = document.getElementById('myChart');
  			new Chart(ctx, {
    		type: 'line',
    		data: {
      		labels: ['Yesterday Sales','Today Sales','Last Sevendays', 'Total Sales'],
      		datasets: [{
        		label: 'Sales',
        		data: [
					<?php //Yesterday Sales 
if($yesterdaysale==""):
							echo "0";
else:
	echo $yesterdaysale;
endif;
						?>, <?php //Today Sales
						if($todysale==""):
													echo "0";
						else:
							echo $todysale;
						endif;
												?>, <?php //Last Sevendays
if($tseven==""):
	echo "0";
else:
echo $tseven;
endif;?>, 
				<?php // Total Sales
		if($totalsale==""):
							echo "0";
else:
	echo $totalsale;
endif;
						?>],
        		borderWidth: 1
      		}]
    		},
    		options: {
				maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
		</script>

<!-- doughnut or bar Chart -->
	<script>
  const ctx1 = document.getElementById('myChart2');

  new Chart(ctx1, {
    type: 'doughnut',
    data: {
      labels: ['Appointment <?php echo $totalappointment;?>','Accepted apt <?php echo $totalaccapt;?>', 'Rejected apt <?php echo $totalrejapt;?>'],
      datasets: [{
        label: '',
        data: [<?php echo $totalappointment;?>, <?php echo $totalaccapt;?>, <?php echo $totalrejapt;?>],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  let customer = document.querySelector('.chartsize2');
  let sale = document.querySelector('.chartsize');

  let showcustomer = function(){
    sale.style.display = 'none';
    customer.style.display = 'block';
  }

  let showsale = function(){
    customer.style.display = 'none';
	sale.style.display = 'block';
  }

</script>

</body>
</html>