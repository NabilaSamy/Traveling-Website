<html>
	<head>
		<title>View Page</title>
		<link rel="stylesheet" href="CSS/css-ViewPage.css" />
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
			echo '<br><center>Welcome ' . $_SESSION['username'] . "<br></center>";
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$username = $_SESSION['username'];
				
				$sql = "SELECT username, travelstart, travelend, traveltransport, traveldate, traveltime FROM travel 
							WHERE username = '$username'";
				$result = mysqli_query($db, $sql);
				
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo"<table border='1'>";
									echo"<tr>";
										echo"<td>Username</td>";
										echo"<td>Travel Start</td>";
										echo"<td>Travel End</td>";
										echo"<td>Travel Transport</td>";
										echo"<td>Transport Date</td>";
										echo"<td>Travel Time</td>";
										echo"<td>Control</td>";
									echo"</tr>";
						
						echo "<tr>";
						echo "<td>" . $row['username'] . "</td><br>";
						echo "<td>" . $row['travelstart'] . "</td><br>";
						echo "<td>" . $row['travelend'] . "</td><br>";
						echo "<td>" . $row['traveltransport'] . "</td><br>";
						echo "<td>" . $row['traveldate'] . "</td><br>";
						echo "<td>" . $row['traveltime'] . "</td><br>";
						echo "<td>
										<form action='UpdatePage.html' method='POST'>
											<button>Update a travel</button>
										</form>
										
										<form action='php-DeletePage.php' method='POST'>
											<button>Delete a travel</button>
										</form>
									</td>";
						echo "</tr>";
						echo "</table>";
						echo '<br><center><a href="php-HomePage.php">Go to Home Page</a></center>';
					}
				} else {
					echo "<br><center>0 results <br></center>";
					echo "<br><center>Error in view, Please Try again! <br></center>";
					echo '<br><center><a href="ViewPage.html">Go to View Page</a></center>';
				}
			}
		?>
		<br><br><br><br><br><br><br><br><br><br><br>
		<script type="text/javascript" src="JS/script-ViewPage.js"></script>
		
		<div class="footer">
			Copyright &copy; 2018 All Right To Nabila Samy &reg; Team
		</div>
	</body>
</html>
