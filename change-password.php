<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['change']))
{
$userid=$_SESSION['bpmsuid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query1=mysqli_query($con,"select ID from tbluser where ID='$userid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query1);
if($row>0){
$ret=mysqli_query($con,"update tbluser set FirstName='$fname', LastName='$lname', Password='$newpassword' where ID='$userid'");

echo '<script>alert("Your Profile successully changed.")</script>';
} else {
echo '<script>alert("Something Went Wrong. Please try again.")</script>';

}



}


  ?>
<!doctype html>
<html lang="en">
<head>
    <title>Beauty Lounge Management System | Signup Page</title>
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
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner booking-history ">
        <div class="container">   
            <div class="main-titles-head text-center">
                <h3 class="header-name "> Profile </h3>
                <p class="tiltle-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-sub">
        <div class="container">   
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                </li>
                <li class="active ">  profile </li>
            </ul>
        </div>
    </div>
</section>

<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="booking-int ">
        <div class="container-fluid">
            <div class=" col-lg-12">
                <div class="offset-md-1 col-md-11">
                    <h3>User Profile</h3>
                    <form method="post" name="signup" onsubmit="return checkpass();">
                        <?php $uid=$_SESSION['bpmsuid'];
                        $ret=mysqli_query($con,"select * from tbluser where ID='$uid'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>

                        <div style="padding-top: 30px;">
                            <label>First Name</label>    
                            <input type="text" class="form-control" name="firstname" value="<?php  echo $row['FirstName'];?>" required="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>Last Name</label> 
                            <input type="text" class="form-control" name="lastname" value="<?php  echo $row['LastName'];?>" required="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>Mobile Number</label>   
                            <input type="text" class="form-control" name="mobilenumber" value="<?php  echo $row['MobileNumber'];?>"  readonly="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>Email address</label>   
                            <input type="text" class="form-control" name="email" value="<?php  echo $row['Email'];?>"  readonly="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>Registration Date</label>   
                            <input type="text" class="form-control" name="regdate" value="<?php  echo $row['RegDate'];?>"  readonly="true">
                        </div> 
                          <?php }?>

                        <div style="padding-top: 30px;">
                            <label>Current Password</label>
                            <input type="password" class="form-control" placeholder="Current Password" id="currentpassword" name="currentpassword" value="" required="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword" value="" required="true">
                        </div>
                        <div style="padding-top: 30px;">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" value=""  required="true">
                            <button type="submit" class="btn btn-contact" name="change">Save Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
</body>
</html><?php } ?>