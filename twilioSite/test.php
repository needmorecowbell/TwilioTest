<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<?php
	if(isset($_GET["value"])){
		
		$value="";
		$value= $_GET["value"];
		
		$value= "The Value is: ". $value;
	}else{
		$value="There is no Value";
	}

    function timeToDb() {
		$con=mysqli_connect("74.98.247.25","amusciano","muddles321","amusciano_test");
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
			date_default_timezone_set("America/New_York");
			mysqli_query($con,"INSERT INTO time
								VALUES (".time().")");
			mysqli_close($con);
		}
		
		
	}

  if (isset($_GET['time'])) {
    timeToDb();
  }
?>

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Musciano</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
<style type="text/css">
</style>

</head>
<body>
<div id="wrapper">
<div id="header">
	<div id="logo">
		<h1>Musciano</h1>
	</div>
	<!-- end div#logo -->
	<div id="menu">
		<ul>
			<li ><a href="index.html">Homepage</a></li>
			<li class="active"><a href="control.php">Control</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<!-- end div#menu -->
</div>
<div>
	<div id="page">
		<div id="page-bgtop">
			<div id="content">
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<h2 class="title"><a href="test.php?time=true">Record Time</a></h2>
													<div class="entry">
								<p>Records Time to database</p>
							</div>
						</div>
					</div>
				</div>
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<h2 class="title"><a href="sms.php">Send Sms</a></h2>
							<div class="entry">
								<p>Sends a message to Adam containing the data via sms</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end div#content -->
			<div id="sidebar">
				<div id="sidebar-bgtop">
					<div id="sidebar-bgbtm">
						<ul>
							<li>
								<h2>Links</h2>
								<ul>
									<li><a href="test.php">To Test</a></li>
									<li><a href="#">Link 2</a></li>
									<li><a href="#">Link 3</a></li>
									<li><a href="#">Link 4</a></li>
									<li><a href="#">Link 5</a></li>
									<li><a href="#">Link 6</a></li>
									<li><a href="#">Link 7</a></li>
								</ul>
							</li>
							<li>
								<h2>Header Link Menu 2</h2>
								<ul>
									<li><a href="#">Link 1</a></li>
									<li><a href="#">Link 2</a></li>
									<li><a href="#">Link 3</a></li>
									<li><a href="#">Link 4</a></li>
									<li><a href="#">Link 5</a></li>
									<li><a href="#">Link 6</a></li>
									<li><a href="#">Link 7</a></li>
								</ul>
							</li>
							<li>
								<h2>Header Link Menu 3</h2>
								<ul>
									<li><a href="#">Link 1</a></li>
									<li><a href="#">Link 2</a></li>
									<li><a href="#">Link 3</a></li>
									<li><a href="#">Link 4</a></li>
									<li><a href="#">Link 5</a></li>
									<li><a href="#">Link 6</a></li>
									<li><a href="#">Link 7</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end div#sidebar -->
			<div style="clear: both; height: 1px"></div>
		</div>
	</div>
	<!-- end div#page -->
</div>
<!-- end div#wrapper -->
<div id="footer-wrapper">
	<div id="footer">
		<p id="legal">Footer</a>.</p>
	</div>
</div>
<!-- end div#footer -->
</body>
</html>
