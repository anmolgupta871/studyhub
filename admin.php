<?php 
session_start();
if(isset($_SESSION["user"])){
if(isset($_REQUEST["table"])){
	$table=$_REQUEST["table"];
	$con=mysqli_connect("localhost","root","","moodle");
	$sql="select * from $table";
	 $result=mysqli_query($con,$sql);
	
	
}
else{
	
	$table="";
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Career College Bhopal</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body class="subpage">
	
		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="5grid">
					<div class="12u-first">

						<!-- Logo -->
							<h1><a href="admin.php">Admin</a></h1>
						
						<!-- Nav -->
							<nav>
								
								<a href="admin.php?table=syllabus">Syllabus</a>
								<a href="admin.php?table=notes">Subjects</a>
								<a href="admin.php?table=practicals">Practicals</a>
								<a href="admin.php?table=papers">Papers</a>
								<a href="admin.php?table=alumni">Alumni</a>
								<a href="admin.php?table=jobs">Jobs</a>
								<a href="logout.php">Logout</a>
							</nav>

					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="12u-first">
						
							<!-- Main Content -->
								<section>
									<header>
										<center><h2>DataBase </h2></center>
										
									</header>	

									<?php
									if($table=="syllabus"){
									?>
									<table width="100%"  border="1">
									<tr>
										<th>Id</th>
										<th>File Name</th>
										<th>File Location</th>
										<th></th>
									</tr>
									<?php
										while($row=mysqli_fetch_assoc($result)){
									?>
										<tr>
											<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["fileName"]; ?></td>
											<td><?php echo $row["location"]; ?></td>
											<td><a href="demo.php?id=<?php  echo $row['id'];  ?>&table=<?php echo $table; ?>" > Delete</a></td>
										</tr>
									<?php
									} // while }
									?>
									</table>
									<?php
									
									} //if }
																		
									?>


									
									
									<?php
									if($table=="jobs"){
									?>
									<table width="100%"  border="1">
									<tr>
										<th>Id</th>
										<th>Company Date</th>
										<th>File Location</th>
										<th></th>
									</tr>
									<?php
										while($row=mysqli_fetch_assoc($result)){
									?>
										<tr>
											<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["companyDate"]; ?></td>
											<td><?php echo $row["location"]; ?></td>
											<td><a href="demo.php?id=<?php  echo $row['id'];  ?>&table=<?php echo $table; ?>" > Delete</a></td>
										</tr>
									<?php
									} // while }
									?>
									</table>
									<?php
									
									} //if }
																		
									?>
									
									



									
									<?php
									if($table=="notes"){
									?>
									<table width="100%"  border="1">
									<tr>
										<th>Id</th>
										<th>Subject Name</th>
										<th>File Location</th>
										<th></th>
									</tr>
									<?php
										while($row=mysqli_fetch_assoc($result)){
									?>
										<tr>
											<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["subjectName"]; ?></td>
											<td><?php echo $row["location"]; ?></td>
											<td><a href="demo.php?id=<?php  echo $row['id'];  ?>&table=<?php echo $table; ?>" > Delete</a></td>
										</tr>
									<?php
									} // while }
									?>
									</table>
									<?php
									
									} //if }
									
									// Practicals
									?>
									<?php
									if($table=="practicals"){
									?>
									<table width="100%"  border="1">
									<tr>
										<th>Id</th>
										<th>Subject Name</th>
										<th>File Location</th>
										<th>Practical Number</th>
										<th></th>
									</tr>
									<?php
										while($row=mysqli_fetch_assoc($result)){
									?>
										<tr>
											<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["subjectName"]; ?></td>
											<td><?php echo $row["location"]; ?></td>
											<td><?php echo $row["practicalNo"]; ?></td>
											<td><a href="demo.php?id=<?php  echo $row['id'];  ?>&table=<?php echo $table; ?>" > Delete</a></td>
										</tr>
									<?php
									} // while }
									?>
									</table>
									<?php
									
									} //if }
									// Papers
									?>
									
									<?php
									if($table=="papers"){
									?>
									<table width="100%"  border="1">
									<tr>
										<th>Id</th>
										<th>Subject Name</th>
										<th>File Location</th>
										<th>Year</th>
										<th></th>
									</tr>
									<?php
										while($row=mysqli_fetch_assoc($result)){
									?>
										<tr>
											<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["subjectName"]; ?></td>
											<td><?php echo $row["location"]; ?></td>
											<td><?php echo $row["year"]; ?></td>
											<td><a href="demo.php?id=<?php  echo $row['id'];  ?>&table=<?php echo $table; ?>" > Delete</a></td>
										</tr>
									<?php
									} // while }
									?>
									</table>
									<?php
									
									} //if }
									//else part
									else{
										echo "<h1>Please Select Any Option </h1>";
									}
									?>
									
									
									
								</section>

						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="5grid">
					<div class="8u-first">
					
						<!-- Links -->
							

					</div>
					<div class="4u">
						
						<!-- Blurb -->
							<section>
								<h2> Informative Text </h2>
								<p>
									This site is developed for get information about BCA final year content. Here you get Syllabus,Papers,Notes,Practicals and Job Opportunities.
								</p>
							</section>
					
					</div>
				</footer>
			</div>

		<!-- Copyright -->
			<div id="copyright">
				(c) 2018 Career College. All rights reserved.
			</div>
	</body>
</html>
<?php

}

else{
	header("location:login/index.html");
}
?>