<?php
$con=mysqli_connect("localhost", "root", "", "blmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

if(isset($_POST["book_now"]))  
 {  
    $uid=$_SESSION['bpmsuid'];
    $name=$_POST['hidden_name'];
    $cost=$_POST['hidden_price'];
    $bkgtime = $_POST['hidden_bookingtime'];
    $fop = $_POST['hidden_formofpayment'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into bkgtbl(userid,aptnumber,aptdate,apttime,servicename,cost,payment) value('$uid','$aptnumber','$adate','$atime','$name','$cost','$fop')");

    if ($query) {
$ret=mysqli_query($con,"select aptnumber from bkgtbl where bkgtbl.userid='$uid' order by ID desc limit 1;");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['aptnumber']; 
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }


}




// if(isset($_POST["online_book"]))
// {
//   $uid=$_SESSION['bpmsuid'];
//   $name=$_POST['hidden_name'];
//   $cost=$_POST['hidden_price'];
//   $bkgtime = $_POST['hidden_bookingtime'];
//   $fop = $_POST['hidden_formofpayment'];
//   $image =$_POST['try_image'];
//   $image =$_FILES["try_image"]["name"];
//   $adate=$_POST['adate'];
//   $atime=$_POST['atime'];
//   $aptnumber = mt_rand(100000000, 999999999);

//   $query=mysqli_query($con,"insert into bkgtbl(userid,aptnumber,aptdate,apttime,servicename,cost,payment,Image) value('$uid','$aptnumber','$adate','$atime','$name','$cost','$fop','$image')");

//   if ($query) {
//     move_uploaded_file($_FILES["try_image"]["name"], "includes/receipt/".$image['try_image']['name']);
//     $ret=mysqli_query($con,"select aptnumber from bkgtbl where bkgtbl.userid='$uid' order by ID desc limit 1;");
//     $result=mysqli_fetch_array($ret);
//     $_SESSION['aptno']=$result['aptnumber']; 
//     }
//   else
//     {
//       echo '<script>alert("Something Went Wrong. Please try again")</script>';
//     }
//   }

// if(isset($_POST['online_book']))
//   {
//   $uid=$_SESSION['bpmsuid'];
//   $name=$_POST['hidden_name'];
//   $cost=$_POST['hidden_price'];
//   $bkgtime = $_POST['hidden_bookingtime'];
//   $fop = $_POST['hidden_formofpayment'];
//   $image=$_POST['try_image'];
// 	$image=$_FILES["try_image"]["name"];
//   $aptnumber = mt_rand(100000000, 999999999);
// // get the image extension
// $extension = substr($image,strlen($image)-4,strlen($image));
// // allowed extensions
// $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
// // Validation for allowed extensions .in_array() function searches an array for a specific value.
// if(!in_array($extension,$allowed_extensions))
// {
// echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// }
// else
// {
// //rename the image file
// $newimage=md5($image).time().$extension;
// // Code for move image into directory
// move_uploaded_file($_FILES["try_image"]["tmp_name"],"receipt/".$newimage); 
// $query=mysqli_query($con,"insert into bkgtbl(userid,aptnumber,aptdate,apttime,servicename,cost,payment,Image) value('$uid','$aptnumber','$adate','$atime','$name','$cost','$fop','$newimage')");
//     if ($query) {
//       $ret=mysqli_query($con,"select aptnumber from bkgtbl where bkgtbl.userid='$uid' order by ID desc limit 1;");
//       $result=mysqli_fetch_array($ret);
//       $_SESSION['aptno']=$result['aptnumber'];   
    
//   }
//   else
//     {
//     echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
//     }

// }
//   }


  ?>
