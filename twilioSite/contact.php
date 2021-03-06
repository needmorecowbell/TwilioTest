<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Musciano</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
<style type="text/css">
@import "gallery.css";
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
			<li><a href="index.html">Homepage</a></li>
			<li><a href="control.php">Control</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li class="active"><a href="contact.php">Contact</a></li>
		</ul>
	</div>
	<!-- end div#menu -->
</div>
<div>
	<div id="page">
		<div id="page-bgtop">
			<div id="content">
				<div id="gallery-bg">
					<div id="gallery-bgtop">
						<div id="gallery-bgbtm">
							<div id="foobar">
								<div class="navigation"> <a href="#" class="first">[ &lt;&lt; ]</a> &nbsp; <a href="#" class="previous">[ &lt; ]</a> &nbsp; <a href="#" class="next">[ &gt; ]</a> &nbsp; <a href="#" class="last">[ &gt;&gt; ]</a> </div>
								<div class="viewer">
									<div class="reel">
										<div class="slide"> <img src="images/img13.jpg" alt=""> <span>Rotary Meeting</span> </div>
										<div class="slide"> <img src="images/img14.jpg" alt=""> <span>Beach</span> </div>
										<div class="slide"> <img src="images/img15.jpg" alt=""> <span>Classic Cars</span> </div>
										<div class="slide"> <img src="images/img16.jpg" alt=""> <span>Beach 2</span> </div>
									</div>
								</div>
							</div>
							<script type="text/javascript">

						$('#foobar').slidertron({
							viewerSelector:			'.viewer',
							reelSelector:			'.viewer .reel',
							slidesSelector:			'.viewer .reel .slide',
							navPreviousSelector:	'.previous',
							navNextSelector:		'.next',
							navFirstSelector:		'.first',
							navLastSelector:		'.last'
						});
						
					</script>
							<!-- end -->
						</div>
					</div>
				</div>
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<h2 class="title"><a href="#">Entry Title</a></h2>
													<div class="entry">
								<p>entry</p>
							</div>
						</div>
					</div>
				</div>
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<h2 class="title"><a href="#">Entry Title</a></h2>
							<div class="entry">
								<p>entry</p>
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
								<h2>Header Link Menu 1</h2>
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
