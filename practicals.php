<?php
if(isset($_REQUEST["id"])){
	$id=$_REQUEST["id"];
}

else{
	$id=2;
	$filename="practicals/blank.txt";
}
	$a[]=array();
	$b[]=array();
	$i=0;
$con=mysqli_connect("localhost","root","","moodle");
$sql="select * from practicals where subjectId='$id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
	 $a[$i]=$row["location"];
	$b[$i]=$row["practicalNo"];
	$i++;
}
$total=count($a);
//$filename=$row["location"];
		

?> 
<!DOCTYPE HTML>

<html>
	<head>
		<title>Practicals</title>
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
										<h2>Subjects</h2>
									</header>
									<ul class="link-list">
										<li><a href="practicals.php?id=java2">Java</a>&nbsp;&nbsp;&nbsp;<a href="practicals/java.docx">Download</a></li>
										<li><a href="practicals.php?id=3">Dot Net</a></a>&nbsp;&nbsp;&nbsp;<a href="practicals/dotnet.docx">Download</a></li>
										
									</ul>
								</section>
								<section>
									<header>
										<h2>Questions & Answers</h2>
									</header>
									<ul class="link-list">
									
									<?php
										for($i=0;$i<$total;$i++){
									
									?>								
										<li><a href="practicals.php?sub=<?php echo $a[$i];  ?>"><?php echo $b[$i];  ?></a></li>
										
									<?php
									
										}
									?>
								
									</ul>
								</section>

						</div>
						<div class="9u">
							
							<!-- Main Content -->
								<section>
									<p>
									<?php
									if(isset($_REQUEST["sub"])){
										$filename=$_REQUEST["sub"];
										$myfile = fopen($filename, "r") or die("Unable to open file!");
										$homepage = file_get_contents($filename);
										$homepage =($homepage);
										echo $homepage;
										fclose($myfile);
									}

									?>
									<a href="<?php echo $filename; ?>" download ?></a>
								
									</p>
																	
									
								
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