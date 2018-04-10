new_user.php
<?php
#Establish a connection to the database
$con=mysqli_connect("localhost","test_user","testonly","seniordesign");

if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

#Pull data from the HTTP POST request and place them into local variables   
$username =  $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

#mySQL query   
$sql = ("INSERT INTO users (username, password, email, phone, fname, lname) VALUES ('$username', '$password', '$email', '$phone', '$fname', '$lname')"); 

#Check if query successful   
if(mysqli_query($con,$sql)){
	echo "Values have been inserted successfully";
}
else{
	echo "Error inserting values";
}
	
#Close connection	
   mysqli_close($con);
?>