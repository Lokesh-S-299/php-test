<?php
$con=mysqli_connect("localhost","root","","Test 01/10");
if (!$con) 
{
	echo "failed";
    die("Connection failed: " . mysqli_connect_error());
}
?>