<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from bkgtbl where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='book-appointment.php'</script>";
          }  
?>
<!doctype html>
<html lang="en">
  <head>
 

    <title>Beauty Lounge Management System | Booking Salon</title>

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
    <div class="about-inner book-appointment ">
        <div class="container">   
            <div class="main-titles-head text-center">
            <h3 class="header-name ">
                Booking Salon
            </h3>
            <p class="tiltle-para "></p>
        </div>
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">
       Booking Salon</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="booking-int">
        <div class="over-table container-fluid">
                <div class=" col-lg-12">
                    <div class="col-md-12">
                    <div class="cont-details">
                   <div class="table-content table-responsive cart-table-content m-t-30">
                    <h4 style="padding-bottom: 20px;text-align: center;color: blue;">Appointment History</h4>
                        <table border="2" class="table">
                            <thead class="gray-bg" >
                                <tr>
                                    <th>#</th>
                                <th>Appointment Number</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th width="15%">Service Name</th>
                                <th width="8%">Price</th>
                                <th>Form of Payment</th>
                                <th width="10%">Status</th>
                                <th width="10%">Action</th>
                                </tr>
                            </thead>
        <tbody>
        <tr>
            <?php
                $userid= $_SESSION['bpmsuid'];
                $query=mysqli_query($con,"select * from bkgtbl  join tbluser on tbluser.ID=bkgtbl.userid where tbluser.ID='$userid'");
                    $cnt=1;
                      while($row=mysqli_fetch_array($query))
                      { ?>
                        <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $row['aptnumber'];?></td>
                            <td><p> <?php echo $row['aptdate']?> </p></td> 
                            <td><?php echo $row['apttime']?></td>
                            <td><?php echo $row['servicename'];?></td>
                            <td>₱ <?php echo $row['cost'];?></td>
                            <td><?php echo $row['payment'];?></td>  
                            <td><?php $status=$row['Status'];
                                if($status==''){
                                 echo "Waiting for confirmation";   
                                } else{
                                echo $status;
                                }
                                ?>
                                    
                                </td>   

                <td><a href="appointment-detail.php?aptnumber=<?php echo $row['aptnumber'];?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                <a href="book-appointment.php?delid=<?php echo $row['id'];?>" class="icon-btn btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a></td>     
                </tr><?php $cnt=$cnt+1; } ?>
                             </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
                <!---
                    <div class="booking-date">
                        <form method="post">
                            <div style="padding-top: 30px;">
                                <label>Appointment Date</label>
            
                                <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true"></div>
                            <div style="padding-top: 30px;">
                                <label>Appointment Time</label>
                                
                                <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true"></div>

                            <button type="submit" class="btn btn-contact" name="submit">Make an Appointment</button>
                        </form>
                    </div>
                    </div>
                </div>
            -->
</div>
    </div>
</div>
</div>
<?php  if(isset($_SESSION['aptno']))
  {
    ?>
    <script>
        swal({
              title: "Thank you for booking your appointment with us.",
              text: "Your appointment number is <?php echo $_SESSION['aptno'];?>",
              icon: "success",
            });
    </script>

<?php
  unset($_SESSION['aptno']);
  }
  ?>

</body>
</html><?php } ?>