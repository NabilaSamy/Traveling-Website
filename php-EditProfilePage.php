<html>
	<head>
		<title>Edit Profile Page</title>
		<link rel="stylesheet" href="CSS/css-EditProfilePage.css" />
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
			echo 'Welcome ' . $_SESSION['username'] . "<br>";
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$username = $_POST['username'];
				$userpassword = $_POST['userpassword'];
				$useremail = $_POST['useremail'];
				$userage = $_POST['userage'];
				$usergender = $_POST['usergender'];
				
				$sql = "UPDATE user SET username = '$username', userpassword = '$userpassword', useremail = '$useremail', 
							userage = '$userage', usergender = '$usergender' WHERE username='$username'";
				
				if (mysqli_query($db, $sql)) {
					echo "<center>You are update your information, This is a new information: <br><br></center>";
					echo '<center>Username: ' . $username . "<br><br></center>";
					echo '<center>User Password: ' . $userpassword . "<br><br></center>";
					echo '<center>User Email: ' . $useremail . "<br><br></center>";
					echo '<center>User Age: ' . $userage . "<br><br></center>";
					echo '<center>User Gender: ' . $usergender . "<br><br></center>";
					echo '<center><a href="php-HomePage.php">Go to Home Page</a></center>';
				} else {
					echo "<center>Error in update, Please Try again! <br><br></center>";
					echo '<center><a href="EditProfilePage.html">Go to Update Page</a></center>';
				}
			}
		?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		<script type="text/javascript" src="JS/script-EditProfilePage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
