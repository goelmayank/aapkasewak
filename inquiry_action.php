<?php 

if($_SERVER['REQUEST_METHOD']=="POST")
{
$to='shivangi.contact@gmail.com';
$subject = "Inquiry Mail from aapkasewak.com"; 
$Message=$Message."<style type='text/css'>.text {
							font-family: Arial, Helvetica, sans-serif;
							font-size: 11px;
							line-height: 16px;
							color: #565556;
							text-decoration: none;
						}</style>"; 
$Message=$Message."<table width='100%' border='0' cellpadding='0' cellspacing='0' class='text'>
		  <tr align='left'>
			<td width='200'>Destination:</td>
			<td>".$_POST['destination']."</td>
		  </tr>
		  <tr align='left'>
			<td> Contact Person:</td>
			<td>".$_POST['contactname']."</td>
		  </tr>
		  <tr align='left'>
			<td> Contact no</td>
			<td>".$_POST['contactno']."</td>
		  </tr>
		  <tr align='left'>
			<td> Email Id :</td>
			<td>".$_POST['emailid']."</td>
		  </tr>
		  <tr align='left'>
			<td> Check-in:</td>
			<td>".$_POST['start']."</td>
		  </tr>
		  <tr align='left'>
			<td> Check-out :</td>
			<td>".$_POST['end']."</td>
		  </tr>
		  <tr align='left'>
			<td> No of persons :</td>
			<td>".$_POST['person']."</td>
		  </tr>
		</table>";

$headers4sender  = "MIME-Version: 1.0\r\n";	
$headers4sender .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($to,$subject,$Message,$headers4sender);
$_SESSION['Message'] ="Your Request has been submitted successfully.";
header("location:".$_SERVER['HTTP_REFERER']);
exit();
}
?>