<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
$password=md5($_POST['newpassword']);
        $query=mysqli_query($con,"select ID from tbluser where  Email='$email' and MobileNumber='$contactno' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
      $query1=mysqli_query($con,"update tbluser set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
?>
<!doctype html>
<html lang="en">
<head>

    <title>Beauty Lounge Management System | Forgot Password Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body id="home">
<?php include_once('includes/header.php');?>

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
    <div class="about-inner contact ">
        <div class="container">   
            <div class="main-titles-head text-center">
                <h3 class="header-name "> Forgot Passwordb</h3>
                <p class="tiltle-para ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-sub">
        <div class="container">   
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p>
                </li>
                <li class="active "> Forgot Password </li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="">
    <div class="map-content-9 text-center mt-lg-0 mt-4">
        <h3 style="padding-bottom: 10px;">Reset your password and Fill below details</h3>
        <form method="post">
            <div>
                <input type="text" class="form-control text-center" name="email" placeholder="Enter Your Email" required="true">
            </div>
            <div style="padding-top: 30px;">
                <input type="number" class="form-control text-center" name="contactno" placeholder="Contact Number" required="true" pattern="[0-9]+">
            </div>
            <div style="padding-top: 30px;">
                <input type="password" class="form-control text-center" id="newpassword" name="newpassword" placeholder="New Password">
            </div>
            <div style="padding-top: 30px;">
                <input type="password" class="form-control text-center" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
            </div>
            <div class="forget-sign twice-two" style="padding-top: 30px;">
                <a class="link--gray" style="color: blue;" href="login.php">Signin</a>
                <button type="submit" class="forgot-res btn btn-danger" name="submit">Reset</button>
            </div>
        </form>
    </div>
</section>
<?php include_once('includes/footer.php');?>
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
</body>

</html>