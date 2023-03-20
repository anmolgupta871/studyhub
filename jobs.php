<?php

$con=mysqli_connect("localhost","root","","moodle");
$sql="select * from jobs ";
$result=mysqli_query($con,$sql);

	 
?> 
<!DOCTYPE HTML>

<html>
	<head>
		<title>Jobs</title>
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
							<h1 class="brand-logo"><a href="index.html">Career College Bhopal</a></h1>
						
						<!-- Nav -->
							<nav>
								
<a href="syllabus.php">Syllabus</a>
								<a href="notes.php">Subject Notes</a>
								<a href="practicals.php">Practical</a>
								<a href="papers.php">Old Question Papers</a>
								<a href="alumini.html">Alumni</a>
								<a href="jobs.php">Jobs</a>
							</nav>

					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="3u-first">
							
							<!-- Sidebar -->
								
								<section>
									<header>
										<h2><a href="jobs/c1.docx" download ?>Company List 1</a>
										
										<h2><a href="jobs/c2.docx" download ?>Company List 2</a>
								</h2>
									</header>
									
								</section>
								

						</div>
						<div class="9u">
							
							<!-- Main Content -->
								<section>
								<?php
										while($row=mysqli_fetch_assoc($result)){
									?>
									<p>
									<?php
									$filename=$row["location"];
										$myfile = fopen($filename, "r") or die("Unable to open file!");
										$homepage = file_get_contents($filename);
										$homepage = nl2br($homepage);
										echo $homepage;
										fclose($myfile);
									
									?>
									
									</p>
									<hr/>
																		
									<?php
									
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
			
						
						<!-- Blurb -->
							<section>
								        <h2><span>Contact</span> Us</h2>
       
        <p class="contact_info"> <span>Address:</span> Career College Campus
Opposite Dussehra Maidan Govindpura(BHEL) Bhopal - 462023<br />
          <span>Telephone:</span>0755-2456042,2488427<br />
          <span>FAX:</span> 0755-2472978<br />
          <span>Office Timing:</span>08:00 Am - 9:00 Pm<br />
          <span>E-mail:</span> <a href="#">info@careercollegeindia.com</a> </p>
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