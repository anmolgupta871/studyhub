<?php 

		$table=$_REQUEST["table"];
		$id=$_REQUEST["id"];
	$con=mysqli_connect("localhost","root","","moodle");
	$sql="delete from $table where id=$id";
	 $result=mysqli_query($con,$sql);
	
		header("location:admin.php?table=$table");

?>