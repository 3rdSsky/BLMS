<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{
    
  if(isset($_POST['online_book']))
  {
  $uid=$_SESSION['bpmsuid'];
  $name=$_POST['hidden_name'];
  $cost=$_POST['hidden_price'];
  $bkgtime = $_POST['hidden_bookingtime'];
  $fop = $_POST['hidden_formofpayment'];
  $adate=$_POST['adate'];
  $atime=$_POST['atime'];
  $image=$_POST['try_image'];
	$image=$_FILES["try_image"]["name"];
  $aptnumber = mt_rand(100000000, 999999999);
// get the image extension
$extension = substr($image,strlen($image)-4,strlen($image));
// allowed extensions
$allowed_extensions = array(".jpg",".jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$newimage=md5($image).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["try_image"]["tmp_name"],"receipt/".$newimage); 
$query=mysqli_query($con,"insert into bkgtbl(userid,aptnumber,aptdate,apttime,servicename,cost,payment,Image) value('$uid','$aptnumber','$adate','$atime','$name','$cost','$fop','$newimage')");
    if ($query) {
      $ret=mysqli_query($con,"select aptnumber from bkgtbl where bkgtbl.userid='$uid' order by ID desc limit 1;");
      $result=mysqli_fetch_array($ret);
      $_SESSION['aptno']=$result['aptnumber']; 
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

}
  }


  ?>


	<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beauty Lounge Management System | Beauty Services Page</title>
	<link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

   <!--Start of Modal -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!-- End of Modal -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="cst-serbody">
	<?php if (strlen($_SESSION['bpmsuid']>0)) {?>
	<?php include_once('includes/sidebar.php');?>
	<?php }?>

	<?php include_once('includes/servicesnav.php');?>

	<div class="">
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
           <div class="col-md-4">
            <div class="offset-sm-4">
              <div class="custommerser">
                <div class="card">   
                   <img src="admin/images/<?php echo $row['Image']?>" alt="product" br />  
                   <h4 class="text-center"><?php echo $row["ServiceName"]; ?></h4>  
                   <h4 class="text-center">₱ <?php echo number_format($row['Cost'],2); ?></h4>  
                   <h4 class="text-center"> <?php echo $row["bookingtime"]; ?></h4>
                    <button data-id='<?php echo $row['id']; ?>' class="ServicesDescription btn btn-danger" style="margin-bottom: 12px;">Learn More</button>
                </div>
              </div>
            </div>
            <button data-id='<?php echo $row['id']; ?>'  class="Booknow btn btn-danger">BOOK NOW</button>
          </div>

            <!-- Modal Body -->
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


        <div class="modal fade" id="bookModal" role="dialog">
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

        <div class="modal fade" id="Onlinepay" role="dialog">
                <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>

        <!-- End Modal Body -->
        <?php
								}
							?>


<!-- Sweet Alert -->
<?php  if(isset($_SESSION['aptno']))
  {
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

<!-- End-->

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
    <!-- Classie -->
    <script src="js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      
      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.js"> </script>

</div>


</body>
</html>
<?php }?>
