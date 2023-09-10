<?php

include("includes/config.php");

if(isset($_POST['saveMsg'])){
	$name = trim(stripslashes(mysqli_real_escape_string($con, $_POST['name'])));
	$email = trim(stripslashes(mysqli_real_escape_string($con, $_POST['email'])));
	$phone = trim(stripslashes(mysqli_real_escape_string($con, $_POST['phone'])));
	$msg = trim(stripslashes(mysqli_real_escape_string($con, $_POST['msg'])));
}
?>
