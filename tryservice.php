
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


<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>

<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" > 
    <div class="recent-work ">
        <div class="container">
            <div class="row about-about">
                <?php $ret=mysqli_query($con,"select * from  adstbl limit 1");
                $cnt=1;
                while ($row=mysqli_fetch_array($ret)) 
                    {?>
                        <div class="">
                            <div class="row">
                            <img src="admin/images/<?php echo $row['Image']?>" alt="product" height="200" width="400" class="img-responsive about-me">
                            <div class="about-grids ">
                                <hr>
                                <h5 class="para"><?php  echo $row['adstitle'];?></h5>
                                <p class="para "><?php  echo $row['adsdescription'];?> </p>
                                <p class="para " style="color: hotpink;"> Cost of Service: ₱<?php  echo $row['Cost'];?> </p>
                            </div>
                        </div>
                        <br>
                        <?php $cnt=$cnt+1;
                    }?>
            </div>
        </div>
    </div>
</section>
</body>

</html>