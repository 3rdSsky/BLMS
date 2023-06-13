
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>
<!doctype html>
<html lang="en">
<head>

    <title>Beauty Lounge Management System | service Page </title>

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
    <div class="about-inner services ">
        <div class="container">   
            <div class="main-titles-head text-center">
                <h3 class="header-name "> Our Service </h3>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-sub">
        <div class="container">   
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                <li class="active ">Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" > 
    <div class="recent-work ">
        <div class="container">
            <div class="row about-about">
                <?php
        $id=$_GET['id'];
if($id=='Beauty Services')
{
    $query="select * From servicetry where category='Beauty Services' ";
    
}
elseif ($id=='Gluta Drip') 
{
    $query="select * From servicetry where category='Gluta Drip' ";
}
elseif ($id=='Gluta Services') 
{
    $query="select * From servicetry where category='Gluta Services' ";
}
elseif ($id=='Elite Services') 
{
    $query="select * From servicetry where category='Elite Services' ";
}
elseif ($id=='Slimming Services') 
{
    $query="select * From servicetry where category='Slimming Services' ";
}

else{
    $query="select * From servicetry";
}
    $sql=mysqli_query($con, $query);
    while($row=mysqli_fetch_array($sql))
    {?>
                        <div class="services-box col-lg-4 col-md-6 col-sm-6 propClone">
                            <a href="login.php?id=<?php echo $row['category']?>">
                                <img src="admin/images/<?php echo $row['Image']?>" alt="product" height="200" width="400" class="img-responsive about-me">
                                <div class="about-grids ">
                                    <hr>
                                    <h5 class="para"><?php  echo $row['ServiceName'];?></h5>
                                    <p class="para "><?php  echo $row['ServiceDescription'];?> </p>
                                    <p class="para " style="color: hotpink;"> Cost of Service: ₱<?php  echo $row['Cost'];?> </p>
                                </div>
                            </a>
                        </div>
                        <br>
                        <?php $cnt=$cnt+1;
                    }?>
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