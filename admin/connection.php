<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
//die('could not connect:' mysql_error();
}
$db=mysql_select_db("aapkasewak",$con);
if(!$db)
{
die("Error in Database Connection");
}
?>
