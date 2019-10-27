<html>
	<head>
		<title>Profile Page</title>
		<link rel="stylesheet" href="CSS/css-ProfilePage.css" />
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
			echo '<br><center>Welcome ' . $_SESSION['username'] . "<br></center>";
			
			$username = $_SESSION['username'];
				
				$sql = "SELECT username, userpassword, useremail, userage, usergender FROM user 
							WHERE username = '$username'";
				$result = mysqli_query($db, $sql);
				
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo"<center><table border='1'></center>";
									echo"<center><tr></center>";
										echo"<center><td>Username</td></center>";
										echo"<center><td>User Password</td></center>";
										echo"<center><td>User Email</td></center>";
										echo"<center><td>User Age</td></center>";
										echo"<center><td>User Gender</td></center>";
										echo"<center><td>Control</td></center>";
									echo"<center></tr></center>";
						
						echo "<center><tr></center>";
						echo "<center><td>" . $row['username'] . "</td><br></center>";
						echo "<center><td>" . $row['userpassword'] . "</td><br></center>";
						echo "<center><td>" . $row['useremail'] . "</td><br></center>";
						echo "<center><td>" . $row['userage'] . "</td><br></center>";
						echo "<center><td>" . $row['usergender'] . "</td><br></center>";
						echo "<center><td>
										<form action='EditProfilePage.html' method='POST'>
											<center><button>Edit Your Information</button>
										</form>
									</td></center>";
						echo "<center></tr></center>";
						echo "<center></table></center>";
						echo '<br><center><a href="php-HomePage.php">Go to Home Page</a></center>';
					}
				} else {
					echo "<br><center>0 results <br></center>";
					echo "<br><center>Error in view, Please Try again! <br></center>";
					echo '<br><center><a href="ViewPage.html">Go to View Page</a></center>';
				}
		?>
		<script type="text/javascript" src="JS/script-ProfilePage.js"></script>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
