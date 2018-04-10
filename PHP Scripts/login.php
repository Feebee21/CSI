<?php
//Unused connection script - Found cleaner way

require "conn.php";
$user_name=$_POST["user_name"];
$user_pass=$_POST["password"];
$mysql_qry="select * from users where username = '$user_name' AND password='$user_pass'";
$result= mysqli_query($conn, $mysql_qry);
	if(mysqli_num_rows($result)> 0){
		echo "Login Success";
	}
	else{
		echo "Login Not success";
	}
	
	
?>