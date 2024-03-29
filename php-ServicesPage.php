<?php
	include ("php-Connect.php");
	session_start();
?>

<html>
	<head>
		<title>Services Page</title>
		<link rel="stylesheet" href="CSS/css-ServicesPage.css" />
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
			<a href="index.html"><img src="Images/Icons/Logout.png" style="width:24;height:24;align:center;"> &nbsp Logout</a>
		</div>
		
		<div class="content">
			<img src="Images/Services.png" style="width:130;"><br>
			<span style="font-size:30px; text-align:center;">Our Services that we services to travellers</span>
			<p style="font-size:20px;">
				- Determine the distance between the takeoff station and the arrival station, and select or choice the most shorter time
				and the most shorter distance between whole roudes, and make sence this roude is safe.<br><br>
				- Providing safety and comfort to our passengers and providing them with the best services.<br><br>
				- At most times of the year, special offers are offered to all people to attract attention and encourage people to travel 
				through our flights.<br><br>
				- Continuously, we provide feedback from each customer to avoid any obstacles or bad service to improve the 
				quality of the service provided to our customers.<br><br>
			</p>
		</div>
		
		<script type="text/javascript" src="JS/script-ServicesPage.js"></script>
		
		<br><br>
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
