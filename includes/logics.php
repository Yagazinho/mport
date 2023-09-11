<?php

include("includes/config.php");

#logics
if(isset($_POST['saveMsg'])){
// collection and scrtinization of form data
	$userName = trim(stripslashes(mysqli_real_escape_string($con, $_POST['userName'])));
	$email = trim(stripslashes(mysqli_real_escape_string($con, $_POST['email'])));
	$phone = trim(stripslashes(mysqli_real_escape_string($con, $_POST['phone'])));
	$msg = trim(stripslashes(mysqli_real_escape_string($con, $_POST['msg'])));
	
//  validating the data
if(empty($userName)){
	array_push($errs, $userNameErr = "You have to type name");
}
if(empty($email)){
	array_push($errs, $emailErr = "Field cannot be left empty");
}
if(empty($phone)){
	array_push($errs, $phoneErr = "Field cannot be left empty");
}
if(empty($msg)){
	array_push($errs, $msgErr = "Field cannot be left empty");
}
//	chcking for duplicates
	if(checkDuplicate('messages', "msg='$msg'")){
		array_push($errs, $msgExistError = ''); $emsg = "Message already exists, please modify";
	}
	
//	saving message
	if(count($errs) == 0){
		if(mysqli_query($con, "INSERT INTO messages(username,email,phone,msg,dc) VALUES('$userName','$email',$phone,'$msg',NOW())")){
		$smsg = "dear $userName your message has been sent!";
		}
		else{
			$emsg = "Something went wrong, Message could not be sent ".mysqli_error($con);
		}
    }
}
?>
