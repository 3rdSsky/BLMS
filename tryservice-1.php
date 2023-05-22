<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="assets/js/jquery-3.3.1.min.js"></script> 
 
            <link rel="stylesheet" href="assets/css/style-starter.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.css"/>
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script> 
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>Address</td>  
                                    <td>Gender</td>  
                                    <td>Designation</td>  
                                    <td>Age</td>
                                    <td>try</td>  
                               </tr>  
                          </thead>  
                          <?php
                          $query ="SELECT * FROM servicetry";  
                          $result = mysqli_query($con, $query);  
                          while($row = mysqli_fetch_array($result))  
                          {?>   
                               <tr>  
                                    <td><?php  echo$row["ServiceName"];?></td>  
                                    <td><?php  echo$row["ServiceDescription"];?></td>  
                                    <td><?php  echo$row["category"];?></td>  
                                    <td><?php  echo$row["Cost"];?></td>  
                                    <td><?php  echo$row["bookingtime"];?></td>
                                    <td>
                      <a href="edit-services.php?editid=<?php echo $row['id'];?>" class="icon-btn btn btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="manage-services.php?delid=<?php echo $row['id'];?>" class="icon-btn btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a>
                      </td>

                               </tr>  
                           <?php      
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html><?php } ?> 
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>