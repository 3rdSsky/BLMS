<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

  }?>


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
                   <h4 class="text-center">₱ <?php echo $row["Cost"]; ?></h4>  
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
