<?php
include('../includes/dbconnection.php');
 
$userid = $_POST['userid'];
 
$query="select * From servicetry where id=".$userid;
$sql=mysqli_query($con, $query);
	while($row=mysqli_fetch_array($sql))
	{?>

 <div class="modal-header" style="margin-bottom:20px;">
     <h4 class="modal-title"><?php echo $row['ServiceName']; ?></h4>
     <button type="button" class="close" data-dismiss="modal">×</button>
  </div>
 <img src="admin/images/<?php echo $row['Image']?>" alt="product" height="200" width="400">
    <p> <?php echo $row['ServiceDescription']; ?></p>

 
<?php } ?>





