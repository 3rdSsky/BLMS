<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST["book_now"]))  
 {  
 	$uid=$_SESSION['bpmsuid'];
    $name=$_POST['hidden_name'];
    $cost=$_POST['hidden_price'];
    $bkgtime = $_POST['hidden_bookingtime'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into bkgtbl(userid,aptnumber,aptdate,apttime,servicename,cost) value('$uid','$aptnumber','$adate','$atime','$name','$cost')");

    if ($query) {
$ret=mysqli_query($con,"select aptnumber from bkgtbl where bkgtbl.userid='$uid' order by ID desc limit 1;");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['aptnumber'];
 echo "<script>window.location.href='thank-you.php'</script>";  
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  }
}
?>


	<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beauty Lounge Management System | Packages or Deals Page</title>
	<link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!--Start of Modal -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- End of Modal -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body class="cst-serbody">
	<?php if (strlen($_SESSION['bpmsuid']>0)) {?>
	<?php include_once('includes/sidebar.php');?>
	<?php }?>

	<?php include_once('includes/servicesnav.php');?>
	<div class="" style="margin-bottom: 200px">
		<?php
	$query="select * From adstbl where category='Package'";
	$sql=mysqli_query($con, $query);
  {?>
    <h1 class="package-title" style="margin-left: 42%;">PACKAGE</h1>
    <?php }
	while($row=mysqli_fetch_array($sql))
	{?>
           <div class="col-md-4">
            <div class="offset-sm-4"> 
              <div class="custommerser">
                <div class="card">   
                   <img src="admin/images/<?php echo $row['Image']?>" alt="product" br />  
                   <h4 class="text-center"><?php echo $row["adstitle"]; ?></h4>  
                   <h4 class="text-center">₱ <?php echo $row["cost"]; ?></h4>  
                   <h4 class="text-center"> <?php echo $row["category"]; ?></h4>
                    <button data-id='<?php echo $row['id']; ?>' class="ServicesDescription btn btn-danger" style="margin-bottom: 12px;">Learn More</button>

                    <button data-id='<?php echo $row['id']; ?>'  class="Booknow btn btn-danger">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>

                    <?php

  }
?>

</div>

  <div class="what" style="margin-bottom: 850px">
    <?php
  $query="select * From adstbl where category='New'";
  $sql=mysqli_query($con, $query);
  {?>
    <h1 class="package-title" style="margin-left: 42%;">NEW</h1>
    <?php }
  while($row=mysqli_fetch_array($sql))
  {?>
           <div class="col-md-4">
           <div class="offset-sm-4"> 
              <div class="custommerser">
                <div class="card">   
                   <img src="admin/images/<?php echo $row['Image']?>" alt="product" br />  
                   <h4 class="text-center"><?php echo $row["adstitle"]; ?></h4>  
                   <h4 class="text-center">₱ <?php echo $row["cost"]; ?></h4>  
                   <h4 class="text-center"> <?php echo $row["category"]; ?></h4>
                    <button data-id='<?php echo $row['id']; ?>' class="ServicesDescription btn btn-danger" style="margin-bottom: 12px;">Learn More</button>

                    <button data-id='<?php echo $row['id']; ?>'  class="Booknow btn btn-danger">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>

                    <?php

  }
?>
 </div>

  <div class="" style="margin-bottom: 1280px">
    <?php
  $query="select * From adstbl where category='Solo'";
  $sql=mysqli_query($con, $query);
  {?>
    <h1 class="package-title" style="margin-left: 42%;">SOLO</h1>
    <?php }
  while($row=mysqli_fetch_array($sql))
  {?>
           <div class="col-md-4">
           <div class="offset-sm-4"> 
              <div class="custommerser">
                <div class="card">   
                   <img src="admin/images/<?php echo $row['Image']?>" alt="product" br />  
                   <h4 class="text-center"><?php echo $row["adstitle"]; ?></h4>  
                   <h4 class="text-center">₱ <?php echo $row["cost"]; ?></h4>  
                   <h4 class="text-center"> <?php echo $row["category"]; ?></h4>
                    <button data-id='<?php echo $row['id']; ?>' class="ServicesDescription btn btn-danger" style="margin-bottom: 12px;">Learn More</button>

                    <button data-id='<?php echo $row['id']; ?>'  class="Booknow btn btn-danger">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>

                    <?php

  }
?>
 </div>


 <div class="" style="margin-bottom: 1300px">
    <?php
  $query="select * From adstbl where category='Combo'";
  $sql=mysqli_query($con, $query);
  {?>
    <h1 class="package-title" style="margin-left: 42%;">COMBO</h1>
    <?php }
  while($row=mysqli_fetch_array($sql))
  {?>
           <div class="col-md-4">
           <div class="offset-sm-4"> 
              <div class="custommerser">
                <div class="card">   
                   <img src="admin/images/<?php echo $row['Image']?>" alt="product" br />  
                   <h4 class="text-center"><?php echo $row["adstitle"]; ?></h4>  
                   <h4 class="text-center">₱ <?php echo $row["cost"]; ?></h4>  
                   <h4 class="text-center"> <?php echo $row["category"]; ?></h4>
                    <button data-id='<?php echo $row['id']; ?>' class="ServicesDescription btn btn-danger" style="margin-bottom: 12px;">Learn More</button>

                    <button data-id='<?php echo $row['id']; ?>'  class="Booknow btn btn-danger">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>

                    <?php

  }
?>
</div>

<div class="">
    <?php
  $query="select * From adstbl where category='Promo'";
  $sql=mysqli_query($con, $query);
  {?>
    <h1 class="package-title" style="margin-left: 42%;">PROMO</h1>
    <?php }
  while($row=mysqli_fetch_array($sql))
  {?>
           <div class="col-md-4">
           <div class="offset-sm-4"> 
              <div class="custommerser">
                <div class="card">   
                   <img src="admin/images/<?php echo $row['Image']?>" alt="product" br />  
                   <h4 class="text-center"><?php echo $row["adstitle"]; ?></h4>   
                   <h4 class="text-center"> <?php echo $row["category"]; ?></h4>
                    <button data-id='<?php echo $row['id']; ?>' class="ServicesDescription btn btn-danger" style="margin-bottom: 12px;">Learn More</button>

                    <button data-id='<?php echo $row['id']; ?>'  class="Booknow btn btn-danger">BOOK NOW</button>
                </div>
              </div>
            </div>

                </div>
                    <?php

  }
?>
<div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>


        <script type='text/javascript'>
            $(document).ready(function(){
                $('.ServicesDescription').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'includes/learnmore.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });

            $(document).ready(function(){
                $('.Booknow').click(function(){
                    var bookid = $(this).data('id');
                    $.ajax({
                        url: 'includes/booknow.php',
                        type: 'post',
                        data: {bookid: bookid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#bookModal').modal('show'); 
                        }
                    });
                });
            });
          </script>
</body>
</html>

