<?php

$con=mysqli_connect("localhost","test_user","testonly","seniordesign");

if (mysqli_connect_errno($con)) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

#Waiting for HTTP POST Request
#$username = $_GET['username'];

#Hardcoded for testing
$username = "Linda";


$result = mysqli_query($con,"SELECT email FROM users where username='$username'");
$row = mysqli_fetch_array($result);
$data = $row[0];

if($data){
   echo $data;
}
else{
	echo "Username not found";
}
mysqli_close($con);

?>