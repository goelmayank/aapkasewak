<?php
ob_start();
// session_start();
include("connection.php");
//ob_end_flush;
//$sql="select * from tblusers where userid=".$_SESSION['userid']; 


if ($_SESSION['username'] == "") 
{
	header("Location:index.php");
	exit();
}
?>


