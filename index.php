<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
     ?>
<!doctype html>
<html lang="en">
  <head>
   
    <title>Beauty Lounge Management System | Home Page</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">


    <div class="sheader">
        <?php include_once('includes/header.php');?>
        <img class="home-img" src="assets/img/bod.png">
        <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
        <div class="sign-login-btn">
            <a href="signup.php">
            <button type="button" class="sign-login">Sign up</button></a>
            <a href="login.php">
            <button type="button" class="sign-login">Login</button></a>
            <hr>
            <div class="line1"></div>
            <div class="line2"></div>
        </div><?php }?> 
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

    <!-- Start of Image Slider -->

     <?php include_once('imageslide.php');?>

     <!-- End of Image Slider -->

     <!-- Start of Services -->

<section class="Services-title">
        <h1>Services</h1>
        <div class="services">
        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="assets/img/gluta-ser.jpg" class="services-pc">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="services-offer card-body">
                        <h1 class="card-title">Gluta Services</h1>
                        <ul>
                            <li>Standard IV</li>
                            <li>Tad IV Slimming</li>
                            <li>Sexy White IV</li>
                            <li>Collagen</li>
                            <li>Vitamin C</li>
                        </ul>
                        <a href="services.php" class="learn btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0 ">
                    <div class="services-offer card-body">
                        <h1 class="card-title">Gluta Drip</h1>
                        <ul>
                            <li>Vitamin IV "Glow Drip"</li>
                            <li>Baby Drip</li>
                            <li>Gluta Coctail Drip</li>
                            <li>Potion Drip Best Seller</li>
                            <li>Snow Miracle Drip</li>
                            <li>Korean Glow Drip "The Belo Drip"</li>
                            <li>Beauty Infusion Drip</li>
                        </ul>
                        <a href="services.php" class="learn btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
            <img src="assets/img/gluta-drip.jpg"   class="services-pc">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="assets/img/slimming.jpg" class="services-pc">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="services-offer card-body">
                        <h1 class="card-title">Slimming Services</h1>
                        <ul>
                            <li>RF Face Slim</li>
                            <li>RF Arms/Back or Thighs</li>
                            <li>RF Tummy with Cavitation</li>
                            <li>Double Chin Reduction</li>
                            <li>Mesotherapy</li>
                        </ul>
                        <a href="services.php" class="learn btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="services-offer card-body">
                        <h1 class="card-title">Beauty Services</h1>
                        <ul>
                            <li>Rejuvelite LED Mask"</li>
                            <li>Cold Lift Face</li>
                            <li>Eyelash Natural Look</li>
                            <li>Eyelash Full Glam</li>
                            <li>Lash Lift</li>
                            <li>Butt/Groin Whitening</li>
                            <li>IPL Laser Hair Removal</li>
                            <li>Armpit Bleaching</li>
                            <li>Armpit Lightening Service</li>
                            <li>Eyebag Lifting Treatment</li>
                            <li>Back Microdermabrasion</li>
                            <li>Rejuvenating Facial w/ Microdermabrasion</li>
                            <li>Microneedling</li>
                        </ul>
                        <a href="services.php" class="learn btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="assets/img/micro.jpg" class="services-pc">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="assets/img/crystal.jpg" class="services-pc">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="services-offer card-body">
                        <h1 class="card-title">Elite Services</h1>
                        <ul>
                            <li>Rejuvelite LED Mask</li>
                            <li>Crystal White Half Legs</li>
                            <li>Crystal White Full Legs</li>
                            <li>Crystal Whte Brazilian</li>
                            <li>Pico Laser Face</li>
                            <li>Pico Laser UA</li>
                            <li>Carbon Laser</li>
                            <li>Oxygeneo w/ Diamond Peel</li>
                        </ul>
                        <a href="services.php" class="learn btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- End of Services -->

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