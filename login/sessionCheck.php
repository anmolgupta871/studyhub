<?php
session_start();
$con=mysqli_connect("localhost","root","","moodle");
$user=$_POST["username"];
$pass=$_POST["password"];
	$sql="select * from login";
	$flag=0;
	 $result=mysqli_query($con,$sql);
	 	while($row=mysqli_fetch_assoc($result)){
			
			if($row["username"]==$user && $row["password"]==$pass){
				
				$flag=1;
				 $_SESSION["user"]=$user;
				header("location:../admin.php");
			}
		}
		if($flag==0){
			header("location:index.html");
			
		}
	 
?>