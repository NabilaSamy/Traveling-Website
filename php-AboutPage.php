<?php
	include ("php-Connect.php");
	session_start();
?>

<html>
	<head>
		<title>About Page</title>
		<link rel="stylesheet" href="CSS/css-AboutPage.css" />
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
			<img src="Images/Coffe.png" style="width:150">
			<p style="font-size:20px;">Welcome to our Traveling Websites to booking tickets to travel around the 
				whole world using our company. Our Company Name is Happy Traveling, and Our CEO Name is Mr/ Saad Samir. <br><br>
				Our Mission is how to safe customer's life and make him/her happy in his/her traveling.<br>We hope you use our 
				website when you want to travel at any time.</p>
			<span style="font-size:30px; text-align:center;">Thanks for visiting our website.</span>
		</div>
		
		<script type="text/javascript" src="JS/script-AboutPage.js"></script>
		
		<br><br>
			<div class="footer">
				Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
			</div>
	</body>
</html>
