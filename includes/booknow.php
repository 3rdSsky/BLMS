<?php
include('../includes/dbconnection.php');
 
$bookid = $_POST['bookid'];
 
$query="select * From servicetry where id=".$bookid;
$sql=mysqli_query($con, $query);
	while($row=mysqli_fetch_array($sql))
	{?>
      <div class="form-group">
         <h3>Form of Payment</h3>

        <button data-id='<?php echo $row['id']; ?>' class="OnlinePay btn btn-danger">Online Payment</button>

      </div>

 <form method="post" action="userservices.php?action=add&id=<?php echo $row["id"]; ?>">
    <div style="padding-top: 10px;">
        <label>Appointment Date</label>
                
        <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true">
    </div>
    <div style="padding-top: 10px;">
    	<label>Appointment Time</label>
                                    
    	<input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true">

	</div>
    <input type="hidden" name="hidden_formofpayment" value="Onsite" />
    <input type="hidden" name="hidden_name" value="<?php echo $row["ServiceName"]; ?>" />  
    <input type="hidden" name="hidden_price" value="<?php echo $row["Cost"]; ?>" />
    <input type="hidden" name="hidden_bookingtime" value="<?php echo $row["bookingtime"]; ?>" />   
    <input type="submit" name="book_now" style="margin-top:5px;" class="book-btn btn btn-danger" value="BOOK NOW" />   
    </form>


<?php } ?>


<script type='text/javascript'>

         $(document).ready(function(){
                $('.OnlinePay').click(function(){
                    var onlinebook = $(this).data('id');
                    $.ajax({
                        url: 'includes/onlinepay.php',
                        type: 'post',
                        data: {onlinebook: onlinebook},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#OnlinePay').modal('show'); 
                        }
                    });
                });
            });

</script>