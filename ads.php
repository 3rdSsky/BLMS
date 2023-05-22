<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
     ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$dir_path = "assest/img/advertisement/advertisement/combo"; 
	$files = scandir($dir_path);

	$count = count($files);
	$index = rand(2, ($count-1));
	$filename = $files[$index];
	echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'">';
	?>
<h1>hello</h1>

</body>
</html>