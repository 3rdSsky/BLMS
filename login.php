<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['login']))
  {
    $id=$_GET['id'];
    if ($id=='packagedeals') {
                $emailcon=$_POST['emailcont'];
                $password=md5($_POST['password']);$query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
                $ret=mysqli_fetch_array($query);
                if($ret>0){
                    $_SESSION['bpmsuid']=$ret['ID'];
                    header('location:packagedeals.php');
                } else{
                    echo "<script>alert('Invalid Details.');</script>";
                }
    } elseif($id=='Beauty Services'){
        $emailcon=$_POST['emailcont'];
        $password=md5($_POST['password']);
        $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
        $ret=mysqli_fetch_array($query);
        if($ret>0){
            $_SESSION['bpmsuid']=$ret['ID'];
            header('location:userservices.php?id=Beauty Services');
        } else{
            echo "<script>alert('Invalid Details.');</script>";
        }
  } elseif($id=='Gluta Drip'){
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['bpmsuid']=$ret['ID'];
        header('location:userservices.php?id=Gluta Drip');
    } else{
        echo "<script>alert('Invalid Details.');</script>";
    }
} elseif($id=='Gluta Services'){
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['bpmsuid']=$ret['ID'];
        header('location:userservices.php?id=Gluta Services');
    } else{
        echo "<script>alert('Invalid Details.');</script>";
    }
} elseif($id=='Elite Services'){
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['bpmsuid']=$ret['ID'];
        header('location:userservices.php?id=Elite Services');
    } else{
        echo "<script>alert('Invalid Details.');</script>";
    }
} elseif($id=='Slimming Services'){
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['bpmsuid']=$ret['ID'];
        header('location:userservices.php?id=Slimming Services');
    } else{
        echo "<script>alert('Invalid Details.');</script>";
    }
} else {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['bpmsuid']=$ret['ID'];
        header('location:userservices.php');
    } else{
        echo "<script>alert('Invalid Details.');</script>";
    }
}

    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Beauty Lounge Management System | Login</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body id="home">
    <div class="header-color">
        <div class="header-position"><?php include_once('includes/header.php');?></div>
    </div>

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
    <div class="about-inner contact ">
        <div class="container">   
            <div class="main-titles-head text-center">
                <h3 class="header-name ">Login Page</h3>
            </div>
        </div>
    </div>

    <div class="breadcrumbs-sub">
        <div class="container">   
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                <li class="active ">Login</li>
            </ul>
        </div>
    </div>
</section>

<!-- breadcrumbs //-->
<section class="login-sec">
    <div class="login-text container-fluid">
        <div class="col-lg-12">
            <form class="login-form" method="post">
                <div>
                    <input type="text" class="form-control" name="emailcont" required="true" placeholder="Registered Email or Contact Number" required="true">
                </div>
                <div style="padding-top: 30px;">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="true">
                </div>
                <div class="login-label-btn">
                    <div class="twice-two" style="padding-top: 30px;">
                        <a class="link--gray" style="color: blue;" href="forgot-password.php">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-danger" name="login">Login</button>
                </div>
            </form>
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