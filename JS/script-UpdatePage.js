function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
}

function validation() {
	var username = document.forms["UpdateForm"]["username"].value;
	if(username == "") {
		alert("Username must not be empty!");
		return false;
	}
	
	var travelstart = document.forms["UpdateForm"]["travelstart"].value;
	if(travelstart == "") {
		alert("Travel Start must not be empty!");
		return false;
	}
	
	var travelend = document.forms["UpdateForm"]["travelend"].value;
	if(travelend == "") {
		alert("Travel End must not be empty!");
		return false;
	}
	
	var traveltransport = document.forms["UpdateForm"]["traveltransport"].value;
	if(traveltransport == "") {
		alert("Travel Transport must not be empty!");
		return false;
	}
	
	var traveldate = document.forms["UpdateForm"]["traveldate"].value;
	if(traveldate == "") {
		alert("Travel Date must not be empty!");
		return false;
	}
	
	var traveltime = document.forms["UpdateForm"]["traveltime"].value;
	if(traveltime == "") {
		alert("Travel Time must not be empty!");
		return false;
	}
}
