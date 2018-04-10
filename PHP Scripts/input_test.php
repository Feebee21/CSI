new_usersID.php
<?php
#Hardcoded test to check database connection and querys


$con = mysqli_connect("localhost","test_user","testonly","seniordesign"); 

$sql = ("INSERT INTO users (username, password, email, phone) VALUES ('David', 'pass', 'david@david.com', '1112223333')");

if(mysqli_query($con,$sql)){
	echo "Values have been inserted successfully";
}
else{
	echo "ERROR!";
}
?>