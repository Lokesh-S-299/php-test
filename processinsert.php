<?php

$name=$_POST['Name'];
$phone=$_POST['Phone'];
$email=$_POST['Email'];

$username=stripcslashes($email);
$userphone=stripcslashes($email);
$useremail=stripcslashes($email);

$con=mysqli_connect("localhost","root","","Test 01/10");

$insert = "INSERT INTO Details (Name,Phone,Email) VALUES ('$name', '$phone', 'email')";

if ($con->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $con->error;
}

?>