<html>
	<head>
		<title>LoginPage Page</title>
		<link rel="stylesheet" href="CSS/css-LoginPage.css" />
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
			
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				// username and password sent from user
				$username = $_POST['username'];
				$userpassword = $_POST['userpassword']; 
				
				$sql = "SELECT username, userpassword FROM user WHERE username = '$username' and 
								userpassword = '$userpassword'";
				$result = mysqli_query($db,$sql);
				
				if (mysqli_num_rows($result)) {
					echo "<center> <br>You are logged in!</center>";
					$_SESSION['username']=$username;
					
					echo "<center><pre>";
						print_r($_SESSION);
					echo"</pre></center>";
					
					echo '<center><a href="php-HomePage.php">Go to Home Page</a></center>';
				} else {
					echo "<center>Your username or password is incorrect! <br></center>";
					echo '<center><a href="LoginPage.html">Go to Login Page</a></center>';
			  }
			}
		?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<script type="text/javascript" src="JS/script-HomePage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
