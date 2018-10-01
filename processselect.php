<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>

<?php

$name=$_POST['Name'];

$username=stripcslashes($name);

$con=mysqli_connect("localhost","root","","Test 01/10");

$result=mysqli_query($con,"select * from Details where Name='$name' ")
or die("Failed to query database.mysql_error()");

$row=mysqli_fetch_array($result);
if($row['Name']==$name)
{
	

echo "<table border='1'>

<tr>

<th>Name</th>

<th>Phone</th>

<th>Email</th>

</tr>";

echo "<tr>";

echo "<td>" . $row['Name'] . "</td>";

echo "<td>" . $row['Phone'] . "</td>";

echo "<td>" . $row['Email'] . "</td>";

echo "</tr>";

echo "</table>";

}
else
{
	echo "Not Found!!!";
}

?>

</body>
</html>





