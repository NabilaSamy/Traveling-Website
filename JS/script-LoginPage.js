function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
}

function validation() {
	var username = document.forms["LoginForm"]["username"].value;
	if(username == "") {
		alert("Username must not be empty!");
		return false;
	}
	
	
	var password = document.forms["LoginForm"]["password"].value;
	if(password == "") {
		alert("Password must not be empty!");
		return false;
	}
}
