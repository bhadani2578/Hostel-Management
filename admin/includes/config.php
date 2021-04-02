<?php
$con=new mysqli('localhost','root','','hostel1');
if($con->connect_error)
{
	echo "Connection not done";
}
?>