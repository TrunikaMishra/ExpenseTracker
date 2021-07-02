<?php 

$con=new mysqli("localhost","root","","DATABASE");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>