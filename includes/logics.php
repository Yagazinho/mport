<?php

include("includes/config.php");

if(isset($_POST['saveMsg'])){
	$name = trim(stripslashes(mysqli_real_escape_string($con, $_POST['fname'])));
	$email = trim(stripslashes(mysqli_real_escape_string($con, $_POST['email'])));
	$phone = trim(stripslashes(mysqli_real_escape_string($con, $_POST['phone'])));
	$msg = trim(stripslashes(mysqli_real_escape_string($con, $_POST['msg'])));
	
//	chcking for duplicates
	if(checkDuplicate('messages', "msg='$msg'")){
		array_push($errs, $msgExistError = ''); $emsg = "Message already exists, please modify";
	}
	
//	saving message
	if(count($errs) == 0){
		if(mysqli_query($con, "INSERT INTO messages(name,email,phone,msg,dc) VALUES('$name','$email',$phone,'$msg',NOW())"));
		$smsg = "dear '$name' your nessage has been sent";
	}
	else{
		$emsg = "Something went wrong, Message could not be sent";
	}
}

?>
