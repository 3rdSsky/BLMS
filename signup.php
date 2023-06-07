<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno' limit by 1");
    $result=mysqli_fetch_array($ret);
    if($result>0){

        echo "<script>alert('This email or Contact Number already associated with another account!.');</script>";
        die();
    }
    else{
        $query=mysqli_query($con, "insert into tbluser(FirstName, LastName, MobileNumber, Email, Password) value('$fname', '$lname','$contno', '$email', '$password' )");
        if ($query) {
            echo "<script>alert('You have successfully registered.');</script>";
            echo "<script>window.location.href='signup.php'</script>";
        }
        else
        {
            echo "<script>alert('Something Went Wrong. Please try again.');</script>";
        }
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
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
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
                <h3 class="header-name "> Signup </h3>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-sub">
        <div class="container">   
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                    <li class="active "> Signup </li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="signup-sec">
    <div class="sign-cont container-fluid">
        <div class="map-content-9 col-lg-12 ">
            <h3>Register with us!!</h3>
            <form method="post" name="signup" onsubmit="return checkpass();">
                <div>
                    <div class="signup-text">
                        <label class="First_name">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required="">
                        <label class="Lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required="">
                    </div>
                    <div class="signup-text">
                        <div class="signup-txt">
                            <div class="MoblieN">
                            <label>Mobile Number</label>
                            <input type="number" class="form-control" placeholder="Mobile Number" required="" name="mobilenumber" pattern="[0-9]+" maxlength="10">
                            </div>
                            <div class="EmailA">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email address" required="" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="signup-text">
                        <div class="signup-pass">
                            <label class="passW">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="true">
                        </div>
                        <div class="Confirmpass">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="repeatpassword" placeholder="Confirm password" required="true">
                        </div>
                        
                    </div>
                </div>
                    <button type="submit" class="btn btn-danger" name="submit">Signup</button>
                </div>
            </form>
            <div class="back-btn">
            <a href="index.php"><button class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</button></a>
            </div>
        </div>
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