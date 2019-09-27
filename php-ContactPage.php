<?php
	include ("php-Connect.php");
	session_start();
?>

<html>
	<head>
		<title>Contact Page</title>
		<link rel="stylesheet" href="CSS/css-ContactPage.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="header">Welcome to Traveling Website</div>
		
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open</span>
		
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="php-HomePage.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a href="php-ProfilePage.php"><img src="Images/Icons/Profile.png" style="width:24;height:24;align:center;"> &nbsp Profile </a>
			<a href="php-AboutPage.php"><i class="fa fa-fw fa-exclamation mark"></i> About</a>
			<a href="php-ServicesPage.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
			<a href="php-ContactPage.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
			<a href="php-WelcomePage.php"><img src="Images/Icons/Logout.png" style="width:24;height:24;align:center;"> &nbsp Logout</a>
		</div>
		
		<div class="content">
			<img src="Images/Coffe.png" style="width:100">
			<p><b style="color:#000; font-size:20px;">Visit Our Office and Meet Our Team</b></p><br>
			
			<div class="Support1">Technical Support<br><br>
				<div style="color:#888;">We are always available to help make the best out of your Traveling website experience. Don't hesitate to contact us at one of the following<br><br></div>
				<div class="info">
					<span>Email: </span><span>support@yahoo.com</span><br>
					<span>Twitter: </span><a style="font-size: 18px;" href="http://www.google.com"> Traveling</a><br>
					<span>Facebook: </span><a style="font-size: 18px;" href="http://www.google.com">Traveling</a><br>
				</div>
			</div>
			
			<div class="Support2">Media Opportunities<br><br>
				<div style="color:#888;">We are always excited to talk to Media. So, reach out to us on the below details to set up a meeting.<br><br></div>
				<div class="info">
					<span>Email: </span><span>mustafa1094@yahoo.com</span><br>
					<span>Phone: </span><span>+201112345678</span>
				</div>
			</div>
			
			<div class="Support3">Partnership Opportunities<br><br>
				<div style="color:#888;">Do you share our vision? Reach out to us and explore how we can collaborate.<br><br></div>
				<div class="info">
					<span>Email: </span><span>mustafa1094@yahoo.com</span><br>
					<span>Phone: </span><span>+201112345678</span>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="JS/script-ContactPage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
