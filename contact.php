<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - FOOD FOR FOODIES</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/a.png" alt="LOGO"></a>
			</div>
		</div><br>
		<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery2.php">Snacks</a>
				</li>
				<li>
					<a href="gallery1.php">brevrages</a>
				</li>
				<li>
					<a href="gallery.php">main course</a>
				</li>
				<li>
					<a href="gallery5.php">desert</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li class="selected">
					<a href="contact.php">Contact</a>
				</li>
			</ul>
	</div>
	<div id="contents">
		<div>
			<div class="body" id="contact">
				<div id="sidebar">
					<div class="body">
						<img src="images/d.jpg" alt="Img">
						<div class="contact">
							<p>
								For Order and Inquiries Please Call: <b>+91-7210910356</b> Or you can visit us at: <b>HIRA SWEETS<br>LAXMI NAGAR DELHI-92, SHOPNO:-1314</b>
					            <b class="email">nikhildubeynd124@gmail.com<br>rshkbisht01@gmail.com</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>FEEDBACK</h1>
					<h3>OPENING SCHDULE</h3>
					<p>
						Monday - Friday 12pm - 11pm<br>
						Saturday 11am - 12am<br>
						​Sunday 12pm - 12am<br>
					</p>
					<p>
					<h1><a href="contact1.php">LOG IN</a></h1>
					</p>
					<form action="insert.php" method="post">
						<label>Name</label>
						<input type="text" name="username">
						<label>Email Address</label>
						<input type="text" name="email">
						<label>Contact Number</label>
						<input type="int" name="mobile_no">
						<label>Message</label>
						<textarea type="text" name="message"></textarea>
						<input type="submit" value="Send Message" class="btn1">
					</form> 
				</div>
			</div>
		</div>
	</div>
<div id="footer">
		<div>
				<div align="center">
					<form action="#" method="post" id="newsletter" align="center">
						<h4>Join Us For More News</h4>
						<input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2">
					</form>
					<div id="connect" align="center">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
			</div>
		</div>
	</div>
</body>
</html>