<?php
include('../includes/dbconnection.php');
 
$onlinebook = $_POST['onlinebook'];
 
$query="select * From servicetry where id=".$onlinebook;
$sql=mysqli_query($con, $query);
   while($row=mysqli_fetch_array($sql))
   {?>
      <div class="form-group">
         <h3>Form of Payment</h3>
       <button data-id='<?php echo $row['id']; ?>' class="Personal btn btn-danger">Onsite</button>
      </div>

 <form method="post" action="userservices.php?action=add&id=<?php echo $row["id"]; ?>" enctype="multipart/form-data">
    <div style="padding-top: 10px;">
      <div class=""></div>
        <div class="alert alert-info" role="alert">
        <strong>Note this number is only for BPI Only</strong>
        <h3>132965494</h3>
        <p>Princess Aubrey Esoporas Tan </p>
        </div>

        <div class="alert alert-info" role="alert">
        <strong>Note this number is only for GCASH Only!</strong>
        <h3>09271520944</h3>
        <p>Princess Aubrey Esoporas Tan </p>
        </div>

        <label>Appointment Date</label>
                
        <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true">
    </div>
    <div style="padding-top: 10px;">
      <label>Appointment Time</label>
                                    
      <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true">

        <div class="form-group"> 
          <div class="alert alert-info" role="alert">
            <strong>Please send your Picture of the Receipt!</strong>
          </div>
          <label for="exampleInputEmail1">Images</label> 
          <input type="file" class="form-control" id="try_image" name="try_image" value="" required="true"> 
        </div>

    </div>
   </div>

    <input type="hidden" name="hidden_name" value="<?php echo $row["ServiceName"]; ?>" />  
    <input type="hidden" name="hidden_price" value="<?php echo $row["Cost"]; ?>" />
    <input type="hidden" name="hidden_bookingtime" value="<?php echo $row["bookingtime"]; ?>" />
    <input type="hidden" name="hidden_formofpayment" value="Online" />    
    <input type="submit" name="online_book" style="margin-top:5px;" class="book-btn btn btn-danger" value="BOOK NOW" />   
    </form>

<?php } ?>

<script type="text/javascript">
            $(document).ready(function(){
                $('.Personal').click(function(){
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
