<?php

$email=$_POST['Email'];

$useremail=stripcslashes($email);

$con=mysqli_connect("localhost","root","","Test 01/10");


$delete = "DELETE FROM Details WHERE Email='$email' ";

if (mysqli_query($con, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

?>