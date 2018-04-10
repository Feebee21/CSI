<?php

#Sets correct passowrd false as default
$correctpass = FALSE;

$con=mysqli_connect("localhost","test_user","testonly","seniordesign");

if (mysqli_connect_errno($con)) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

#$username = $_POST['username'];
#$password = $_POST['password'];

#Hardcoded test of query and password checking
$username = "Dave";
$password = "pass12";
$phonenumber = 1112223333;
$username = 'B%';

$result = mysqli_query($con, "SELECT password FROM users where username=$username");
$row = mysqli_fetch_array($result);
$data = $row[0];

if($data==$password){
	$correctpass = TRUE;
}
else{
	echo "Wrong username or password!";
}

echo $data;
echo $correctpass;

mysqli_close($con);



?>