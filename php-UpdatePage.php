<html>
	<head>
		<title>Update Page</title>
		<link rel="stylesheet" href="CSS/css-UpdatePage.css" />
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
		
		<?php
			include ("php-Connect.php");
			session_start();
			echo '<center><br>Welcome ' . $_SESSION['username'] . "<br><br></center>";
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$username = $_POST['username'];
				$travelstart = $_POST['travelstart'];
				$travelend = $_POST['travelend'];
				$traveltransport = $_POST['traveltransport'];
				$traveldate = $_POST['traveldate'];
				$traveltime = $_POST['traveltime'];
				
				$sql = "UPDATE travel SET username = '$username', travelstart = '$travelstart', travelend = '$travelend', 
							traveltransport = '$traveltransport', traveldate = '$traveldate', traveltime = '$traveltime'
							WHERE username='$username'";
				
				if (mysqli_query($db, $sql)) {
					echo "<center>You are update your travel information, This is a new information:<br><br></center>";
					echo '<center>Username: ' . $username . "<br><br></center>";
					echo '<center>Travel Starts From ' . $travelstart . " City.<br><br></center>";
					echo '<center>Travel Ends at ' . $travelend . " City.<br><br></center>";
					echo '<center>Travel Transport: ' . $traveltransport . "<br><br></center>";
					echo '<center>Travel Date: ' . $traveldate . "<br><br></center>";
					echo '<center>Travel Time: ' . $traveltime . "<br><br></center>";
					echo '<center><a href="php-HomePage.php">Go to Home Page</a></center>';
				} else {
					echo "<center>Error in update, Please Try again! <br><br></center>";
					echo '<center><a href="UpdatePage.html">Go to Update Page</a></center>';
				}
			}
		?>
		<br><br><br><br><br><br><br><br>
		<script type="text/javascript" src="JS/script-UpdatePage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
