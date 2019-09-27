<html>
	<head>
		<title>Delete Page</title>
		<link rel="stylesheet" href="CSS/css-DeletePage.css" />
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
		
		<?php
			include ("php-Connect.php");
			session_start();
			echo '<br><center>Welcome ' . $_SESSION['username'] . "<br><br></center>";
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$username = $_SESSION['username'];
				$sql = "DELETE FROM travel WHERE username='$username'";
				
				if (mysqli_query($db,$sql)) {
					echo "<center>You Delete a Travel. <br><br></center>";
					echo '<center><a href="php-HomePage.php">Go to Home Page</a><br><br></center>';
				} else {
					echo "<center>Error in delete, Please Try again! <br></center>";
					echo '<center><a href="DeletePage.html">Go to Delete Page</a><br><br></center>';
				}
			}
		?>
		<script type="text/javascript" src="JS/script-DeletePage.js"></script>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
