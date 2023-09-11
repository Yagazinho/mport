<?php
define('HOST','localhost');
define('USER','root');
define('PWD','');
define('DB','mport');

$con = mysqli_connect(HOST,USER,PWD,DB);

//variables
$errs = []; $smsg = $emsg = "";

//functions
function checkDuplicate($tbl, $where){
	global $con;
	$q = mysqli_query($con, "SELECT * FROM $tbl WHERE $where");
	if(mysqli_num_rows($q) > 0){return true;}else{return false;}
}


?>
