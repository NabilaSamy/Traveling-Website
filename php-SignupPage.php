<html>
	<head>
		<title>Signup Page</title>
		<link rel="stylesheet" href="CSS/css-SignupPage.css" />
	</head>
	<body>
		<div class="header">Welcome to Traveling Website</div>
		
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open</span>
		
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="php-WelcomePage.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a href="LoginPage.html"><img src="Images/Icons/Login.png" style="width:24;height:24;align:center;">&nbsp Login</a>
			<a href="SignupPage.html"><img src="Images/Icons/Signup.png" style="width:24;height:24;align:center;">&nbsp  Signup</a>
			<a href="AboutPage.html"><i class="fa fa-fw fa-exclamation mark"></i> About</a>
			<a href="ServicesPage.html"><i class="fa fa-fw fa-wrench"></i> Services</a>
			<a href="ContactPage.html"><i class="fa fa-fw fa-envelope"></i> Contact</a>
		</div>
		
		<?php
			include ("php-Connect.php");
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$username = $_POST['username'];
				$userpassword = $_POST['userpassword'];
				$useremail = $_POST['useremail'];
				$userage = $_POST['userage'];
				$usergender = $_POST['usergender'];
				
				$sql = "INSERT INTO user (username, userpassword, useremail, userage, usergender)
							VALUES ('$username', '$userpassword', '$useremail', '$userage', '$usergender')";
				
				if (mysqli_query($db,$sql)) {
					echo "<center>You are Signed up! <br><br></center>";
					echo '<center>Username: ' . $username . "<br><br></center>";
					echo '<center>User Password: ' . $userpassword . "<br><br></center>";
					echo '<center>User Email: ' . $useremail . "<br><br></center>";
					echo '<center>User Age: ' . $userage . "<br><br></center>";
					echo '<center>User Gender: ' . $usergender . "<br><br></center>";
					echo '<center><a href="php-WelcomePage.php">Go to Home Page</a><br></center>';
				} else {
					echo "<center>Error in Signup, Please Try again! <br><br></center>";
					echo '<center><a href="SignupPage.html">Go to Signup Page</a><br></center>';
					echo '<br><br><br><br><br><br><br><br><br><br>';
				}
			}
		?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		<script type="text/javascript" src="JS/script-SignupPage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
