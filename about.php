<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>Beauty Lounge Management System | About us Page</title>

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
        <div class="about-inner about ">
            <div class="container">   
                <div class="main-titles-head text-center">
                <h3 class="header-name ">
					About Us
                </h3>
            </div>
</div>
   </div>
   <div class="breadcrumbs-sub">
   <div class="container">   
    <ul class="breadcrumbs-custom-path">
        <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
        <li class="active ">About</li>
    </ul>
</div>
</div>
        </div>
    </section>
<!-- breadcrumbs //-->

<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
<div class="row">
		<div class="">
            <div class="hair-make">
                <p><spam></spam> Brey's Beauty Lounge is a beauty salon that offers services like spa, beauty, and personal care. Like other businesses and salons, Brey's Beauty Lounge began as a tiny business, with the proprietor visiting each of his or her clients' homes. The (owner) has overcome many obstacles to get where she is today. She will continue to work hard until the beauty lounge becomes larger and more popular, at which point she already has branches in any Visayas city she chooses, including Bacolod, Roxas City, Cebu, Iloilo, Dumaguete, Layu-Lapu, Miagao, San Carlos City, Kalibo, Tigbauan, and Silay.</p>
            </div>
                <br>
                 <h3>Services</h3>
                <div class="about-con">
                        <ul>
                            <h2>Beauty Services</h2>
                            <div class="about-con"></div>
                            <li>Rejuvelite LED Mask</li>
                            <li>Cold Lift Face</li>
                            <li>Eyelash Natural Look</li>
                            <li>Eyelash Full Glam</li>
                            <li>Lash Lift</li>
                            <li>Butt/Groin Whitening</li>
                            <li>IPL Laser Hair Removal</li>
                            <li>Armpit Bleaching</li>
                            <li>Armpit Lightening Service</li>
                            <li>Eyebaf Lifting Treatment</li>
                            <li>Back Microdermabrasion</li>
                            <li>Rejuvenating Facial w/ Microdermabrasion</li>
                            <li>Microneedling</li>
                        </ul>
                </div>
                <div class="about-con">
                        <ul>
                            <h2>GLUTA SERVICES</h2>
                            <div class="about-con"></div>
                            <li>Standard IVk</li>
                            <li>Tad IV Slimming</li>
                            <li>Sexy White IV</li>
                            <li>Collagen</li>
                            <li>Vitamin C</li>
                        </ul>
                </div>
                 <div class="about-con">
                        <ul>
                            <h2>GLUTA DRIP</h2>
                            <div class="about-con"></div>
                            <li>Vitamin IV "Glow Drip"</li>
                            <li>Baby Drip</li>
                            <li>Gluta Cocktail Drip</li>
                            <li>Potion Drip Best Seller</li>
                            <li>Snow Miracle Drip</li>
                            <li>Korean Glow Drip "The Belo Drip"</li>
                            <li>Beauty Infusion Drip</li>
                        </ul>
                </div>
                   <div class="about-con">
                        <ul>
                            <h2>SLIMMING SERVICES</h2>
                            <div class="about-con"></div>
                            <li>Rf Face Slim</li>
                            <li>RF Arms/Back or Thighs</li>
                            <li>RF Tummy with Cavitation</li>
                            <li>Doube Chin Reduction</li>
                            <li>Mesotherapy</li>
                        </ul>
                </div>
                   <div class="about-con">
                        <ul>
                            <h2>ELITE SERVICES</h2>
                            <li>Rejuvelite LED Mask</li>
                            <li>Crystal White Half Legs</li>
                            <li>Cystal White Full Legs</li>
                            <li>Crystal White Brazilian</li>
                            <li>Pico Laser Face</li>
                            <li>Pico Laser UA</li>
                            <li>Carbon Laser</li>
                            <li>Oxygeneo w/ Diamond Peel</li>
                        </ul>
                </div>
                <br><br>
                <div class="about-staff">
                    <img src="assets/img/group-beauty.jpg">
                    <div class="about-picstaff">
                        <h1>Joely Acutillar</h1>
                        <h2>Receptionist/Beauty Attendant</h2>
                        <img src="assets/img/joely-acutiller-receptionistbeautyattendant.jpg">
                    </div>
                    <div class="about-picstaff">
                        <h1>Fe Durens</h1>
                        <h2>Beauty Attendant</h2>
                        <img src="assets/img/fe_duren-beauty-attendant.jpg">
                    </div>
                    <div class="about-picstaff">
                        <h1>Mej Arboleda</h1>
                        <h2>Nurse</h2>
                        <img src="assets/img/mej-arboleda-nurse.jpg">
                    </div>
                    <div class="about-picstaff">
                        <h1>Josephine Delfin</h1>
                        <h2>Nails</h2>
                        <img src="assets/img/josephin_delfin-nails.jpg">
                    </div>
                    <div class="about-picstaff">
                        <h1>Jill Espacio</h1>
                        <h2>Beauty Attendant</h2>
                        <img src="assets/img/user.jpg">
                    </div>
                </div>

<!---
	<div class="hair-make">
		<?php
/*
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
		<h5><a href="#"><?php  echo $row['PageTitle'];?></a></h5>
		<p class="para mt-2"><?php  echo $row['PageDescription'];?></p><?php } */ ?>
	</div>	
-->	
	</div>

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