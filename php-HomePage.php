<?php
	include ("php-Connect.php");
	session_start();
?>
			
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="CSS/css-HomePage.css" />
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
			<div class="mySlides fade">
				<img src="Images/img_nature_wide.jpg" style="width:80%">
			</div>
			
			<div class="mySlides fade">
				<img src="Images/img_fjords_wide.jpg" style="width:80%">
			</div>
			
			<div class="mySlides fade">
				<img src="Images/img_mountains_wide.jpg" style="width:80%">
			</div>
		</div>
		
		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
		
		<p>
			<?php
				echo 'Welcome ' . $_SESSION['username'] . "<br>";
			?>
			- Welcome to Traveling website, This is our home page. <br>
			- This website serving some of services, like: <br><br>
				<a href="InsertPage.html"><button class="button"> Insert a travel </button></a> &nbsp &nbsp
				<a href="ViewPage.html"><button class="button"> View your all travels  </button></a>
		</p>
		
		<script type="text/javascript" src="JS/script-HomePage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
