function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
}

function validation() {
	var username = document.forms["RegisterForm"]["username"].value;
	var password = document.forms["RegisterForm"]["password"].value;
	var cpassword = document.forms["RegisterForm"]["cpassword"].value;
	var email = document.forms["RegisterForm"]["email"].value;
	var age = document.forms["RegisterForm"]["age"].value;
	
	if(username == "") {
		alert("Username must not be empty!");
		return false;
	} else if(password == "") {
		alert("Password must not be empty!");
		return false;
	} else if(cpassword != password){
		alert("The Two Passwords is not the same!");
		return false;
	} else if(age == "") {
		alert("Age must not be empty!");
		return false;
	} else if(email == "") {
		alert("Email must not be empty!");
		return false;
	} else {
		alert("Successfully Signup.");
		return true;
	}
}
